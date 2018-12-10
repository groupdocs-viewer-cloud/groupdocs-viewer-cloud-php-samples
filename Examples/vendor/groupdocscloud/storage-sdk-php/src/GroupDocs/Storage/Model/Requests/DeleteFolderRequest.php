<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="DeleteFolderRequest.php">
 *   Copyright (c) 2018 GroupDocs.Storage for Cloud
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */
namespace GroupDocs\Storage\Model\Requests;

/*
 * Request model for deleteFolder" operation.
 */
class DeleteFolderRequest
{
    /*
     * Initializes a new instance of the DeleteFolderRequest class.
     *  
     * @param string $path Folder path e.g. /Folder1
     * @param string $storage User's storage name
     * @param bool $recursive Remove recursivelly inner folder/files. If false and folder contains data than exception is raised.
     */
    public function __construct($path, $storage = null, $recursive = null)
    {
        $this->path = $path;
        $this->storage = $storage;
        $this->recursive = $recursive;
    }

    /*
     * Folder path e.g. /Folder1
     */
    public $path;

    /*
     * User's storage name
     */
    public $storage;

    /*
     * Remove recursivelly inner folder/files. If false and folder contains data than exception is raised.
     */
    public $recursive;
}