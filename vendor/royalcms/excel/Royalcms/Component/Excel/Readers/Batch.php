<?php namespace Royalcms\Component\Excel\Readers;

use Closure;
use Royalcms\Component\Excel\Excel;
use Royalcms\Component\Excel\Exceptions\ExcelException;

/**
 *
 * Royalcms Excel Batch Importer
 *
 */
class Batch {

    /**
     * Excel object
     * @var Excel
     */
    protected $excel;

    /**
     * Batch files
     * @var array
     */
    public $files = array();

    /**
     * Set allowed file extensions
     * @var array
     */
    protected $allowedFileExtensions = array(
        'xls',
        'xlsx',
        'csv'
    );

    /**
     * Start the Batach
     * @param  Excel   $excel
     * @param  array   $files
     * @param  Closure $callback
     * @return Excel
     */
    public function start(Excel $excel, $files, Closure $callback)
    {
        // Set excel object
        $this->excel = $excel;

        // Set files
        $this->_setFiles($files);

        // Do the callback
        if ($callback instanceof Closure)
        {
            foreach ($this->getFiles() as $file)
            {
                // Load the file
                $excel = $this->excel->load($file);

                // Do a callback with the loaded file
                call_user_func($callback, $excel, $file);
            }
        }

        // Return our excel object
        return $this->excel;
    }

    /**
     * Get the files
     * @return array
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * Set the batch files
     * @param array|string $files
     * @throws ExcelException
     * @return void
     */
    protected function _setFiles($files)
    {
        // If the param is an array, these will be the files for the batch import
        if (is_array($files))
        {
            $this->files = $this->_getFilesByArray($files);
        }

        // Get all the files inside a folder
        elseif (is_string($files))
        {
            $this->files = $this->_getFilesByFolder($files);
        }

        // Check if files were found
        if (empty($this->files))
            throw new ExcelException('[ERROR]: No files were found. Batch terminated.');
    }

    /**
     * Set files by array
     * @param  array $array
     * @return array
     */
    protected function _getFilesByArray($array)
    {
        $files = array();
        // Make sure we have real paths
        foreach ($array as $i => $file)
        {
            $files[$i] = realpath($file) ? $file : base_path($file);
        }

        return $files;
    }

    /**
     * Get all files inside a folder
     * @param  string $folder
     * @return array
     */
    protected function _getFilesByFolder($folder)
    {
        // Check if it's a real path
        if (!realpath($folder))
            $folder = base_path($folder);

        // Find path names matching our pattern of excel extensions
        $glob = glob($folder . '/*.{' . implode(',', $this->allowedFileExtensions) . '}', GLOB_BRACE);

        // If no matches, return empty array
        if ($glob === false) return array();

        // Return files
        return array_filter($glob, function ($file)
        {
            return filetype($file) == 'file';
        });
    }
}