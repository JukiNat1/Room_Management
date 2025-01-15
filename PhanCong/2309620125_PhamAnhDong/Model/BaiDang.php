<?php

class BaiDang
{
    var $HoTen;
    var $TieuDe;
    var $ThoiGiagDang;
    var $HinhAnh;
    var $GiaPhong;
    var $MaBaiDang;
    var $MaPhong;
    var $MoTa;
    var $LuotXem;
    var $TrangThai;

    function __construct($HoTen, $TieuDe, $ThoiGiagDang)
    {
        $this->HoTen = $HoTen;
        $this->TieuDe = $TieuDe;
        $this->ThoiGiagDang = $ThoiGiagDang;
    }
}
