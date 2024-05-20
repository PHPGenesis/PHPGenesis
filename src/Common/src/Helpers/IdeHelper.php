<?php
/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\Common\Helpers;

class IdeHelper
{
    public static function updateEditorConfig(): void
    {
        file_copy(phpgenesis_common_src('Resources/.editorconfig'), phpgenesis_vendor_dir('../.editorconfig'));
    }
}