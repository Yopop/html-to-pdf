<?php
/**
 * This file is part of the spiritix/html-to-pdf package.
 *
 * @copyright Copyright (c) Matthias Isler <mi@matthias-isler.ch>
 * @license   MIT
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Spiritix\HtmlToPdf\Output;

/**
 * Output handler interface.
 *
 * @package Spiritix\HtmlToPdf\Output
 * @author  Matthias Isler <mi@matthias-isler.ch>
 */
interface OutputInterface
{
    /**
     * Must accept the PDF binary data as an argument.
     *
     * @param string $data The binary PDF data
     */
    public function setPdfData($data);
}