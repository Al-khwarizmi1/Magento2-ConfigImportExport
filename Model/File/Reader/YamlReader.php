<?php

namespace Semaio\ConfigImportExport\Model\File\Reader;

use Symfony\Component\Yaml\Yaml as SymfonyYaml;

/**
 * Class YamlReader
 *
 * @package Semaio\ConfigImportExport\Model\File\Reader
 */
class YamlReader extends AbstractReader
{
    /**
     * @param string $fileName
     * @return array
     */
    public function parse($fileName)
    {
        $content = SymfonyYaml::parse($fileName);

        return $this->normalize($content);
    }
}
