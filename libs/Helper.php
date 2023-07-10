<?php

class Helper
{
    public static function createLabel($name = "Link")
    {
        $xhtml = "";
        $xhtml .= '<label class="font-weight-bold">' . $name . '</label>';
        return $xhtml;
    }
    public static function createInputText($name = "link", $value = "")
    {
        $xhtml = "";
        $xhtml .= '<input class="form-control" type="text" name="' . $name . '" value="' . $value . '">';
        return $xhtml;
    }
    public static function createSltBox($name = "status", $arrOption = [], $keySelected = '')
    {
        $xhtml = "";
        $xhtml .= ' <select class="custom-select" name="' . $name . '">';
        if (!empty($arrOption)) {
            foreach ($arrOption as $key => $value) {
                $selected = ($keySelected == $key) ? 'selected' : '';
                $xhtml .=  '<option value="' . $key . '" ' . $selected . '>' . $value . '</option>';
            }
        }
        $xhtml .= " </select>";
        return $xhtml;
    }
    public static function hightLight($text, $word)
    {
        $text = preg_replace('#' . preg_quote($word) . '#i', '<mark>\\0</mark>', $text);
        return $text;
    }
    public static function statusItems($id, $stt)
    {
        $xhtml = "";
        $class = "btn-danger";
        $icon = "fa-minus";

        if ($stt == "active") {
            $class = "btn-success";
            $icon = "fa-check";
        }
        $xhtml .=  '<a href="index.php?module=student&controller=rss&action=changeStt&id=' . $id . '&status=' . $stt . '" class="btn btn-sm ' . $class . '"><i class="fas ' . $icon . '"></i></a>';

        return $xhtml;
    }
}