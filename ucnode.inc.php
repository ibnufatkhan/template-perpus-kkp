<?php
/**
 * SLiMS Union Catalog client configuration
 *
 * Copyright (C) 2010 Hendro Wicaksono (hendrowicaksono@yahoo.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 */

// be sure that this file not accessed directly
if (!defined('INDEX_AUTH')) {
    die("can not access this file directly");
} elseif (INDEX_AUTH != 1) {
    die("can not access this file directly");
}

$ucs['serveraddr'] = 'http://perpustakaan.kkp.go.id/union/'; // UCS server address. NO TRAILING SLASH! for local testing on Windows machine don't use localhost, use 127.0.0.1 instead
$ucs['serverversion'] = 2; // UCS server version
$node['id'] = 'perpusupt--'; // node ID
$node['password'] = 'ArchivelagO2022!'; // default is s0beautifulday
$node['name'] = 'Perpustakaan UPT --'; // node name
