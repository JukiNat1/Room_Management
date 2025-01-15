<?php

class KhuVuc
{
    var $MaKhuVuc;
    var $TenKhuVuc;
    var $TenQuanHuyen;
    function __construct($MaKhuVuc, $TenKhuVuc, $TenQuanHuyen)
    {
        $this->MaKhuVuc = $MaKhuVuc;
        $this->TenKhuVuc = $TenKhuVuc;
        $this->TenQuanHuyen = $TenQuanHuyen;
    }

}
