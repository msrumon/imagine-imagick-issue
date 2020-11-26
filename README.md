# Issue w/ Imagine library

I'm having an issue when I try to open `.eps` files using [Imagine](https://github.com/avalanche123/Imagine) library along with  **Imagick**. As soon as I call `open()`, the server crashes.

Below is the PHP configuration I have on my machine:

```bash
$ php -i
phpinfo()
PHP Version => 7.4.13

System => Windows NT RUMON-RYZEN1700 10.0 build 19041 (Windows 10) AMD64
Build Date => Nov 24 2020 12:36:31
Compiler => Visual C++ 2017
Architecture => x64
Configure Command => cscript /nologo /e:jscript configure.js  "--enable-snapshot-build" "--enable-debug-pack" "--disable-zts" "--with-pdo-oci=c:\php-snap-build\deps_aux\oracle\x64\instantclient_12_1\sdk,shared" "--with-oci8-12c=c:\php-snap-build\deps_aux\oracle\x64\insta
ntclient_12_1\sdk,shared" "--enable-object-out-dir=../obj/" "--enable-com-dotnet=shared" "--without-analyzer" "--with-pgo"
Server API => Command Line Interface
Virtual Directory Support => disabled
Configuration File (php.ini) Path =>
Loaded Configuration File => C:\tools\php74\php.ini
Scan this dir for additional .ini files => (none)
Additional .ini files parsed => (none)
PHP API => 20190902
PHP Extension => 20190902
Zend Extension => 320190902
Zend Extension Build => API320190902,NTS,VC15
PHP Extension Build => API20190902,NTS,VC15
Debug Build => no
Thread Safety => disabled
Zend Signal Handling => disabled
Zend Memory Manager => enabled
Zend Multibyte Support => provided by mbstring
IPv6 Support => enabled
DTrace Support => disabled

Registered PHP Streams => php, file, glob, data, http, ftp, zip, compress.zlib, compress.bzip2, https, ftps, phar
Registered Stream Socket Transports => tcp, udp, ssl, tls, tlsv1.0, tlsv1.1, tlsv1.2, tlsv1.3
Registered Stream Filters => convert.iconv.*, string.rot13, string.toupper, string.tolower, string.strip_tags, convert.*, consumed, dechunk, zlib.*, bzip2.*

This program makes use of the Zend Scripting Language Engine:
Zend Engine v3.4.0, Copyright (c) Zend Technologies


 _______________________________________________________________________


Configuration

# ...

exif

EXIF Support => enabled
Supported EXIF Version => 0220
Supported filetypes => JPEG, TIFF
Multibyte decoding support using mbstring => enabled
Extended EXIF tag formats => Canon, Casio, Fujifilm, Nikon, Olympus, Samsung, Panasonic, DJI, Sony, Pentax, Minolta, Sigma, Foveon, Kyocera, Ricoh, AGFA, Epson

Directive => Local Value => Master Value
exif.decode_jis_intel => JIS => JIS
exif.decode_jis_motorola => JIS => JIS
exif.decode_unicode_intel => UCS-2LE => UCS-2LE
exif.decode_unicode_motorola => UCS-2BE => UCS-2BE
exif.encode_jis => no value => no value
exif.encode_unicode => ISO-8859-15 => ISO-8859-15

# ...

gd

GD Support => enabled
GD Version => bundled (2.1.0 compatible)
FreeType Support => enabled
FreeType Linkage => with freetype
FreeType Version => 2.9.1
GIF Read Support => enabled
GIF Create Support => enabled
JPEG Support => enabled
libJPEG Version => 9 compatible
PNG Support => enabled
libPNG Version => 1.6.34
WBMP Support => enabled
XPM Support => enabled
libXpm Version => 30512
XBM Support => enabled
WebP Support => enabled
BMP Support => enabled
TGA Read Support => enabled

Directive => Local Value => Master Value
gd.jpeg_ignore_warning => 1 => 1

# ...

imagick

imagick module => enabled
imagick module version => 3.4.4
imagick classes => Imagick, ImagickDraw, ImagickPixel, ImagickPixelIterator, ImagickKernel
Imagick compiled with ImageMagick version => ImageMagick 7.0.7-11 Q16 x64 2017-11-23 http://www.imagemagick.org
Imagick using ImageMagick library version => ImageMagick 7.0.7-11 Q16 x64 2017-11-23 http://www.imagemagick.org
ImageMagick copyright => Copyright (C) 1999-2015 ImageMagick Studio LLC
ImageMagick release date => 2017-11-23
ImageMagick number of supported formats:  => 238
ImageMagick supported formats => 3FR, 3G2, 3GP, AAI, AI, ART, ARW, AVI, AVS, BGR, BGRA, BGRO, BIE, BMP, BMP2, BMP3, BRF, CAL, CALS, CANVAS, CAPTION, CIN, CIP, CLIP, CLIPBOARD, CMYK, CMYKA, CR2, CRW, CUR, CUT, DCM, DCR, DCX, DDS, DFONT, DJVU, DNG, DOT, DPS, DPX, DXT1, DXT
5, EMF, EPDF, EPI, EPS, EPS2, EPS3, EPSF, EPSI, EPT, EPT2, EPT3, ERF, EXR, FAX, FILE, FITS, FLIF, FPX, FRACTAL, FTP, FTS, G3, G4, GIF, GIF87, GRADIENT, GRAY, GROUP4, GV, HALD, HDR, HISTOGRAM, HRZ, HTM, HTML, HTTP, HTTPS, ICB, ICO, ICON, IIQ, INFO, INLINE, IPL, ISOBRL, IS
OBRL6, J2C, J2K, JBG, JBIG, JNG, JNX, JP2, JPC, JPE, JPEG, JPG, JPM, JPS, JPT, JSON, K25, KDC, LABEL, M2V, M4V, MAC, MAP, MASK, MAT, MATTE, MEF, MIFF, MKV, MNG, MONO, MOV, MP4, MPC, MPEG, MPG, MRW, MSL, MSVG, MTV, MVG, NEF, NRW, NULL, ORF, OTB, OTF, PAL, PALM, PAM, PANGO
, PATTERN, PBM, PCD, PCDS, PCL, PCT, PCX, PDB, PDF, PDFA, PEF, PES, PFA, PFB, PFM, PGM, PICON, PICT, PIX, PJPEG, PLASMA, PNG, PNG00, PNG24, PNG32, PNG48, PNG64, PNG8, PNM, PPM, PS, PS2, PS3, PSB, PSD, PTIF, PWP, RADIAL-GRADIENT, RAF, RAS, RAW, RGB, RGBA, RGBO, RGF, RLA,
RLE, RMF, RW2, SCR, SCREENSHOT, SCT, SFW, SGI, SHTML, SIX, SIXEL, SPARSE-COLOR, SR2, SRF, STEGANO, SUN, SVG, SVGZ, TEXT, TGA, THUMBNAIL, TIFF, TIFF64, TILE, TIM, TTC, TTF, TXT, UBRL, UBRL6, UIL, UYVY, VDA, VICAR, VID, VIFF, VIPS, VST, WBMP, WEBP, WMF, WMV, WPG, X3F, XBM,
 XC, XCF, XPM, XPS, XV, YCbCr, YCbCrA, YUV

Directive => Local Value => Master Value
imagick.locale_fix => 0 => 0
imagick.progress_monitor => 0 => 0
imagick.skip_version_check => 0 => 0

# ...

Additional Modules

Module Name

Environment

Variable => Value
# REMOVED FOR SIMPLICITY

PHP Variables

Variable => Value
# REMOVED FOR SIMPLICITY


PHP License
This program is free software; you can redistribute it and/or modify
it under the terms of the PHP License as published by the PHP Group
and included in the distribution in the file:  LICENSE

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

If you did not receive a copy of the PHP license, or have any
questions about PHP licensing, please contact license@php.net.
```

I hope @avalanche123 will be able to help me.
