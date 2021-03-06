<?php
// This file is part of BOINC.
// http://boinc.berkeley.edu
// Copyright (C) 2014 University of California
//
// BOINC is free software; you can redistribute it and/or modify it
// under the terms of the GNU Lesser General Public License
// as published by the Free Software Foundation,
// either version 3 of the License, or (at your option) any later version.
//
// BOINC is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// See the GNU Lesser General Public License for more details.
//
// You should have received a copy of the GNU Lesser General Public License
// along with BOINC.  If not, see <http://www.gnu.org/licenses/>.

require_once('../inc/boinc_db.inc');
require_once('../inc/util.inc');
require_once('../inc/account.inc');
require_once('../inc/countries.inc');
require_once('../inc/translation.inc');
require_once('../inc/recaptchalib.php');

// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://129.114.16.64:5054/boincserver/v2/api/authorize_from_org");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "email=gerald.joshua153@utexas.edu&org_key=d3fw115lVInWgihpEIU1lBu8");
curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = "Content-Type: application/x-www-form-urlencoded";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
echo "result = ".$result;
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);

?>
