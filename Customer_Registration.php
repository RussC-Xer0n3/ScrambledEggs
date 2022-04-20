<?php
$path = $_SERVER['DOCUMENT_ROOT'].'\XerOne\'';
include_once('Validator.php');
include_once('connect_customer.php');
include_once('connect.php');
echo'<form action='.connect_customer().'method="post" enctype="
application/x-www-form-urlencoded" 
accept-charset="utf-8">
	<label for="title">Title:</label>
	<!---Dropdown--->
	<select id="title" name="title">
		<option value="duchess">Duchess. </option>
		<option value="lady">Lady. </option>
		<option value="ms">Ms. </option>
		<option value="mrs">Mrs. </option>
		<option value="miss">Miss. </option>
		<option value="duke">Duke. </option>
		<option value="lord">Lord. </option>
		<option value="sir">Sir. </option>
		<option value="mr">Mr. </option>
		<option value="master">Master. </option>
	' . echo titleSelector("---", "", "form-control"); . '<br>
	<label for="fname">First Name:</label>
	<input type="text" id="fname" name="fname" value='.$fname.'><br>
	<p id="fname" class="error">'.$fnerror.'</p><br>
	<label for="lname">Last Name:</label>
	<input type="text" id="lname" name="lname" value='.$lname.'><br>
	<p id="lname" class="error">'.$lnerror.'</p><br>
	<label for="email">Email:</label>
	<input type="email" id="email" name="email" value='.$email.'><br>
	<p id="lname" class="error">'.$emerror.'</p><br>
	<label for="address">Address:</label>
	<label for="first_line">First Line:</label>
	<input type="text" id="first_line" name="first_line" value='. $first_line.'><br>
	<p id="first_line" class="error">'.$first_line_error.'</p><br>
	<label for="first_line">First Line:</label>
	<input type="text" id="second_line" name="second_line" value='. $second_line .'><br>
	<p id="second_line" class="error">'.$second_line_error.'</p><br>
	<label for="first_line">Town / City:</label>
	<input type="text" id="town_line" name="town_line" value='.$town_line.'><br>
	<p id="town_line" class="error">'.$town_line_error.'</p><br>
	<label for="county_line">County:</label>
	<input type="text" id="county_line" name="county_line" value='.$county_line.'><br>
	<p id="county_line" class="error">'.$county_line_error.'</p><br>
	<label for="postal_line">Postal/Zip:</label>
	<input type="text" id="postal_line" name="postal_line" value='.$postal_line.'><br>
	<p id="postal_line" class="error">'.$postal_line_error.'</p><br>
	<label for="country_line">Country:</label>
	<!---Dropdown--->
	<select id="country" name="country">
		<option value="AD">AD - Andorra (+376)</option>
		<option value="AE">AE - United Arab Emirates (+971)</option>
		<option value="AF">AF - Afghanistan (+93)</option>
		<option value="AG">AG - Antigua And Barbuda (+1268)</option>
		<option value="AI">AI - Anguilla (+1264)</option>
		<option value="AL">AL - Albania (+355)</option>
		<option value="AM">AM - Armenia (+374)</option>
		<option value="AN">AN - Netherlands Antilles (+599)</option>
		<option value="AO">AO - Angola (+244)</option>
		<option value="AQ">AQ - Antarctica (+672)</option>
		<option value="AR">AR - Argentina (+54)</option>
		<option value="AS">AS - American Samoa (+1684)</option>
		<option value="AT">AT - Austria (+43)</option>
		<option value="AU">AU - Australia (+61)</option>
		<option value="AW">AW - Aruba (+297)</option>
		<option value="AZ">AZ - Azerbaijan (+994)</option>
		<option value="BA">BA - Bosnia And Herzegovina (+387)</option>
		<option value="BB">BB - Barbados (+1246)</option>
		<option value="BD">BD - Bangladesh (+880)</option>
		<option value="BE">BE - Belgium (+32)</option>
		<option value="BF">BF - Burkina Faso (+226)</option>
		<option value="BG">BG - Bulgaria (+359)</option>
		<option value="BH">BH - Bahrain (+973)</option>
		<option value="BI">BI - Burundi (+257)</option>
		<option value="BJ">BJ - Benin (+229)</option>
		<option value="BL">BL - Saint Barthelemy (+590)</option>
		<option value="BM">BM - Bermuda (+1441)</option>
		<option value="BN">BN - Brunei Darussalam (+673)</option>
		<option value="BO">BO - Bolivia (+591)</option>
		<option value="BR">BR - Brazil (+55)</option>
		<option value="BS">BS - Bahamas (+1242)</option>
		<option value="BT">BT - Bhutan (+975)</option>
		<option value="BW">BW - Botswana (+267)</option>
		<option value="BY">BY - Belarus (+375)</option>
		<option value="BZ">BZ - Belize (+501)</option>
		<option value="CA">CA - Canada (+1)</option>
		<option value="CC">CC - Cocos (keeling) Islands (+61)</option>
		<option value="CD">CD - Congo, The Democratic Republic Of The (+243)</option>
		<option value="CF">CF - Central African Republic (+236)</option>
		<option value="CG">CG - Congo (+242)</option>
		<option value="CH">CH - Switzerland (+41)</option>
		<option value="CI">CI - Cote D Ivoire (+225)</option>
		<option value="CK">CK - Cook Islands (+682)</option>
		<option value="CL">CL - Chile (+56)</option>
		<option value="CM">CM - Cameroon (+237)</option>
		<option value="CN">CN - China (+86)</option>
		<option value="CO">CO - Colombia (+57)</option>
		<option value="CR">CR - Costa Rica (+506)</option>
		<option value="CU">CU - Cuba (+53)</option>
		<option value="CV">CV - Cape Verde (+238)</option>
		<option value="CX">CX - Christmas Island (+61)</option>
		<option value="CY">CY - Cyprus (+357)</option>
		<option value="CZ">CZ - Czech Republic (+420)</option>
		<option value="DE">DE - Germany (+49)</option>
		<option value="DJ">DJ - Djibouti (+253)</option>
		<option value="DK">DK - Denmark (+45)</option>
		<option value="DM">DM - Dominica (+1767)</option>
		<option value="DO">DO - Dominican Republic (+1809)</option>
		<option value="DZ">DZ - Algeria (+213)</option>
		<option value="EC">EC - Ecuador (+593)</option>
		<option value="EE">EE - Estonia (+372)</option>
		<option value="EG">EG - Egypt (+20)</option>
		<option value="ER">ER - Eritrea (+291)</option>
		<option value="ES">ES - Spain (+34)</option>
		<option value="ET">ET - Ethiopia (+251)</option>
		<option value="FI">FI - Finland (+358)</option>
		<option value="FJ">FJ - Fiji (+679)</option>
		<option value="FK">FK - Falkland Islands (malvinas) (+500)</option>
		<option value="FM">FM - Micronesia, Federated States Of (+691)</option>
		<option value="FO">FO - Faroe Islands (+298)</option>
		<option value="FR">FR - France (+33)</option>
		<option value="GA">GA - Gabon (+241)</option>
		<option value="GB">GB - United Kingdom (+44)</option>
		<option value="GD">GD - Grenada (+1473)</option>
		<option value="GE">GE - Georgia (+995)</option>
		<option value="GH">GH - Ghana (+233)</option>
		<option value="GI">GI - Gibraltar (+350)</option>
		<option value="GL">GL - Greenland (+299)</option>
		<option value="GM">GM - Gambia (+220)</option>
		<option value="GN">GN - Guinea (+224)</option>
		<option value="GQ">GQ - Equatorial Guinea (+240)</option>
		<option value="GR">GR - Greece (+30)</option>
		<option value="GT">GT - Guatemala (+502)</option>
		<option value="GU">GU - Guam (+1671)</option>
		<option value="GW">GW - Guinea-bissau (+245)</option>
		<option value="GY">GY - Guyana (+592)</option>
		<option value="HK">HK - Hong Kong (+852)</option>
		<option value="HN">HN - Honduras (+504)</option>
		<option value="HR">HR - Croatia (+385)</option>
		<option value="HT">HT - Haiti (+509)</option>
		<option value="HU">HU - Hungary (+36)</option>
		<option value="ID">ID - Indonesia (+62)</option>
		<option value="IE">IE - Ireland (+353)</option>
		<option value="IL">IL - Israel (+972)</option>
		<option value="IM">IM - Isle Of Man (+44)</option>
		<option value="IN">IN - India (+91)</option>
		<option value="IQ">IQ - Iraq (+964)</option>
		<option value="IR">IR - Iran, Islamic Republic Of (+98)</option>
		<option value="IS">IS - Iceland (+354)</option>
		<option value="IT">IT - Italy (+39)</option>
		<option value="JM">JM - Jamaica (+1876)</option>
		<option value="JO">JO - Jordan (+962)</option>
		<option value="JP">JP - Japan (+81)</option>
		<option value="KE">KE - Kenya (+254)</option>
		<option value="KG">KG - Kyrgyzstan (+996)</option>
		<option value="KH">KH - Cambodia (+855)</option>
		<option value="KI">KI - Kiribati (+686)</option>
		<option value="KM">KM - Comoros (+269)</option>
		<option value="KN">KN - Saint Kitts And Nevis (+1869)</option>
		<option value="KP">KP - Korea Democratic Peoples Republic Of (+850)</option>
		<option value="KR">KR - Korea Republic Of (+82)</option>
		<option value="KW">KW - Kuwait (+965)</option>
		<option value="KY">KY - Cayman Islands (+1345)</option>
		<option value="KZ">KZ - Kazakstan (+7)</option>
		<option value="LA">LA - Lao Peoples Democratic Republic (+856)</option>
		<option value="LB">LB - Lebanon (+961)</option>
		<option value="LC">LC - Saint Lucia (+1758)</option>
		<option value="LI">LI - Liechtenstein (+423)</option>
		<option value="LK">LK - Sri Lanka (+94)</option>
		<option value="LR">LR - Liberia (+231)</option>
		<option value="LS">LS - Lesotho (+266)</option>
		<option value="LT">LT - Lithuania (+370)</option>
		<option value="LU">LU - Luxembourg (+352)</option>
		<option value="LV">LV - Latvia (+371)</option>
		<option value="LY">LY - Libyan Arab Jamahiriya (+218)</option>
		<option value="MA">MA - Morocco (+212)</option>
		<option value="MC">MC - Monaco (+377)</option>
		<option value="MD">MD - Moldova, Republic Of (+373)</option>
		<option value="ME">ME - Montenegro (+382)</option>
		<option value="MF">MF - Saint Martin (+1599)</option>
		<option value="MG">MG - Madagascar (+261)</option>
		<option value="MH">MH - Marshall Islands (+692)</option>
		<option value="MK">MK - Macedonia, The Former Yugoslav Republic Of (+389)</option>
		<option value="ML">ML - Mali (+223)</option>
		<option value="MM">MM - Myanmar (+95)</option>
		<option value="MN">MN - Mongolia (+976)</option>
		<option value="MO">MO - Macau (+853)</option>
		<option value="MP">MP - Northern Mariana Islands (+1670)</option>
		<option value="MR">MR - Mauritania (+222)</option>
		<option value="MS">MS - Montserrat (+1664)</option>
		<option value="MT">MT - Malta (+356)</option>
		<option value="MU">MU - Mauritius (+230)</option>
		<option value="MV">MV - Maldives (+960)</option>
		<option value="MW">MW - Malawi (+265)</option>
		<option value="MX">MX - Mexico (+52)</option>
		<option value="MY">MY - Malaysia (+60)</option>
		<option value="MZ">MZ - Mozambique (+258)</option>
		<option value="NA">NA - Namibia (+264)</option>
		<option value="NC">NC - New Caledonia (+687)</option>
		<option value="NE">NE - Niger (+227)</option>
		<option value="NG">NG - Nigeria (+234)</option>
		<option value="NI">NI - Nicaragua (+505)</option>
		<option value="NL">NL - Netherlands (+31)</option>
		<option value="NO">NO - Norway (+47)</option>
		<option value="NP">NP - Nepal (+977)</option>
		<option value="NR">NR - Nauru (+674)</option>
		<option value="NU">NU - Niue (+683)</option>
		<option value="NZ">NZ - New Zealand (+64)</option>
		<option value="OM">OM - Oman (+968)</option>
		<option value="PA">PA - Panama (+507)</option>
		<option value="PE">PE - Peru (+51)</option>
		<option value="PF">PF - French Polynesia (+689)</option>
		<option value="PG">PG - Papua New Guinea (+675)</option>
		<option value="PH">PH - Philippines (+63)</option>
		<option value="PK">PK - Pakistan (+92)</option>
		<option value="PL">PL - Poland (+48)</option>
		<option value="PM">PM - Saint Pierre And Miquelon (+508)</option>
		<option value="PN">PN - Pitcairn (+870)</option>
		<option value="PR">PR - Puerto Rico (+1)</option>
		<option value="PT">PT - Portugal (+351)</option>
		<option value="PW">PW - Palau (+680)</option>
		<option value="PY">PY - Paraguay (+595)</option>
		<option value="QA">QA - Qatar (+974)</option>
		<option value="RO">RO - Romania (+40)</option>
		<option value="RS">RS - Serbia (+381)</option>
		<option value="RU">RU - Russian Federation (+7)</option>
		<option value="RW">RW - Rwanda (+250)</option>
		<option value="SA">SA - Saudi Arabia (+966)</option>
		<option value="SB">SB - Solomon Islands (+677)</option>
		<option value="SC">SC - Seychelles (+248)</option>
		<option value="SD">SD - Sudan (+249)</option>
		<option value="SE">SE - Sweden (+46)</option>
		<option value="SG">SG - Singapore (+65)</option>
		<option value="SH">SH - Saint Helena (+290)</option>
		<option value="SI">SI - Slovenia (+386)</option>
		<option value="SK">SK - Slovakia (+421)</option>
		<option value="SL">SL - Sierra Leone (+232)</option>
		<option value="SM">SM - San Marino (+378)</option>
		<option value="SN">SN - Senegal (+221)</option>
		<option value="SO">SO - Somalia (+252)</option>
		<option value="SR">SR - Suriname (+597)</option>
		<option value="ST">ST - Sao Tome And Principe (+239)</option>
		<option value="SV">SV - El Salvador (+503)</option>
		<option value="SY">SY - Syrian Arab Republic (+963)</option>
		<option value="SZ">SZ - Swaziland (+268)</option>
		<option value="TC">TC - Turks And Caicos Islands (+1649)</option>
		<option value="TD">TD - Chad (+235)</option>
		<option value="TG">TG - Togo (+228)</option>
		<option value="TH">TH - Thailand (+66)</option>
		<option value="TJ">TJ - Tajikistan (+992)</option>
		<option value="TK">TK - Tokelau (+690)</option>
		<option value="TL">TL - Timor-leste (+670)</option>
		<option value="TM">TM - Turkmenistan (+993)</option>
		<option value="TN">TN - Tunisia (+216)</option>
		<option value="TO">TO - Tonga (+676)</option>
		<option value="TR">TR - Turkey (+90)</option>
		<option value="TT">TT - Trinidad And Tobago (+1868)</option>
		<option value="TV">TV - Tuvalu (+688)</option>
		<option value="TW">TW - Taiwan, Province Of China (+886)</option>
		<option value="TZ">TZ - Tanzania, United Republic Of (+255)</option>
		<option value="UA">UA - Ukraine (+380)</option>
		<option value="UG">UG - Uganda (+256)</option>
		<option value="US">US - United States (+1)</option>
		<option value="UY">UY - Uruguay (+598)</option>
		<option value="UZ">UZ - Uzbekistan (+998)</option>
		<option value="VA">VA - Holy See (vatican City State) (+39)</option>
		<option value="VC">VC - Saint Vincent And The Grenadines (+1784)</option>
		<option value="VE">VE - Venezuela (+58)</option>
		<option value="VG">VG - Virgin Islands, British (+1284)</option>
		<option value="VI">VI - Virgin Islands, U.s. (+1340)</option>
		<option value="VN">VN - Viet Nam (+84)</option>
		<option value="VU">VU - Vanuatu (+678)</option>
		<option value="WF">WF - Wallis And Futuna (+681)</option>
		<option value="WS">WS - Samoa (+685)</option>
		<option value="XK">XK - Kosovo (+381)</option>
		<option value="YE">YE - Yemen (+967)</option>
		<option value="YT">YT - Mayotte (+262)</option>
		<option value="ZA">ZA - South Africa (+27)</option>
		<option value="ZM">ZM - Zambia (+260)</option>
		<option value="ZW">ZW - Zimbabwe (+263)</option>
	' . echo countrySelector("---", "", "", "form-control"); . '
	<p id="country_line" class="error">'.$country_line_error.'</p><br>
	<label for="home_line">Home Telelephone: '.dialcode($country_line).'</label>
	<input type="tel" id="home_line" name="home_line" value='.$home_line.'><br>
	<p id="home_line" class="error">'.$home_line_error.'</p><br>
	<label for="mobile_line">Mobile: '.dialcode($country_line).' </label>
	<input type="tel" id="mobile_line" name="mobile_line" value='.$mobile_line.'><br>
	<p id="mobile_line" class="error">'.$mobile_line_error.'</p><br>
	<input type="submit" value="Submit">
</form>';

/*
* Country Array to HTML Select List
* Developed By: Jose Philip Raja - www.josephilipraja.com
* About Author: Creative Director of CreaveLabs IT Solutions - www.creavelabs.com
*
* Usage:
* echo countrySelector(); // Basic
* echo countrySelector("IN"); // Set default Country with its code
* echo countrySelector("IN", "my-country", "my-country", "form-control"); // With full Options
*
*/

/* MODDED - from Jose' country selector */ 
$titleArray = array(
	'---'=>array('name'=>''),
	'Duchess'=>array('name'=>'Duchess'),
	'Lady'=>array('name'=>'Lady'),
	'Ms'=>array('name'=>'Ms'),
	'Mrs'=>array('name'=>'Mrs'),
	'Miss'=>array('name'=>'Miss'),
	'Duke'=>array('name'=>'Duke'),
	'Lord'=>array('name'=>'Lord'),
	'Sir'=>array('name'=>'Sir'),
	'Mr'=>array('name'=>'Mr'),
	'Master'=>array('name'=>'Master'));

function titleSelector($defaultTitle= "", $id = "", $name = "", $classes = "") {

	global $titleArray;
	
	$output = "<select id='".$id."' name='".$name."' class='".$classes."'>";
	
	foreach($titleArray as $code => $title){
	
		$title = ucwords(strtolower($title["name"])); 
		$output .= "<option value='".$code."' ".(($code==strtoupper($defaultTitle))?"selected":"").">".$code." - ".$titleName.")</option>";
	}
	$output .= "</select>";
	return $output;
}
$countryArray = array(
	'---'=>array('name'=>'','code'=>''),
	'AD'=>array('name'=>'ANDORRA','code'=>'376'),
	'AE'=>array('name'=>'UNITED ARAB EMIRATES','code'=>'971'),
	'AF'=>array('name'=>'AFGHANISTAN','code'=>'93'),
	'AG'=>array('name'=>'ANTIGUA AND BARBUDA','code'=>'1268'),
	'AI'=>array('name'=>'ANGUILLA','code'=>'1264'),
	'AL'=>array('name'=>'ALBANIA','code'=>'355'),
	'AM'=>array('name'=>'ARMENIA','code'=>'374'),
	'AN'=>array('name'=>'NETHERLANDS ANTILLES','code'=>'599'),
	'AO'=>array('name'=>'ANGOLA','code'=>'244'),
	'AQ'=>array('name'=>'ANTARCTICA','code'=>'672'),
	'AR'=>array('name'=>'ARGENTINA','code'=>'54'),
	'AS'=>array('name'=>'AMERICAN SAMOA','code'=>'1684'),
	'AT'=>array('name'=>'AUSTRIA','code'=>'43'),
	'AU'=>array('name'=>'AUSTRALIA','code'=>'61'),
	'AW'=>array('name'=>'ARUBA','code'=>'297'),
	'AZ'=>array('name'=>'AZERBAIJAN','code'=>'994'),
	'BA'=>array('name'=>'BOSNIA AND HERZEGOVINA','code'=>'387'),
	'BB'=>array('name'=>'BARBADOS','code'=>'1246'),
	'BD'=>array('name'=>'BANGLADESH','code'=>'880'),
	'BE'=>array('name'=>'BELGIUM','code'=>'32'),
	'BF'=>array('name'=>'BURKINA FASO','code'=>'226'),
	'BG'=>array('name'=>'BULGARIA','code'=>'359'),
	'BH'=>array('name'=>'BAHRAIN','code'=>'973'),
	'BI'=>array('name'=>'BURUNDI','code'=>'257'),
	'BJ'=>array('name'=>'BENIN','code'=>'229'),
	'BL'=>array('name'=>'SAINT BARTHELEMY','code'=>'590'),
	'BM'=>array('name'=>'BERMUDA','code'=>'1441'),
	'BN'=>array('name'=>'BRUNEI DARUSSALAM','code'=>'673'),
	'BO'=>array('name'=>'BOLIVIA','code'=>'591'),
	'BR'=>array('name'=>'BRAZIL','code'=>'55'),
	'BS'=>array('name'=>'BAHAMAS','code'=>'1242'),
	'BT'=>array('name'=>'BHUTAN','code'=>'975'),
	'BW'=>array('name'=>'BOTSWANA','code'=>'267'),
	'BY'=>array('name'=>'BELARUS','code'=>'375'),
	'BZ'=>array('name'=>'BELIZE','code'=>'501'),
	'CA'=>array('name'=>'CANADA','code'=>'1'),
	'CC'=>array('name'=>'COCOS (KEELING) ISLANDS','code'=>'61'),
	'CD'=>array('name'=>'CONGO, THE DEMOCRATIC REPUBLIC OF THE','code'=>'243'),
	'CF'=>array('name'=>'CENTRAL AFRICAN REPUBLIC','code'=>'236'),
	'CG'=>array('name'=>'CONGO','code'=>'242'),
	'CH'=>array('name'=>'SWITZERLAND','code'=>'41'),
	'CI'=>array('name'=>'COTE D IVOIRE','code'=>'225'),
	'CK'=>array('name'=>'COOK ISLANDS','code'=>'682'),
	'CL'=>array('name'=>'CHILE','code'=>'56'),
	'CM'=>array('name'=>'CAMEROON','code'=>'237'),
	'CN'=>array('name'=>'CHINA','code'=>'86'),
	'CO'=>array('name'=>'COLOMBIA','code'=>'57'),
	'CR'=>array('name'=>'COSTA RICA','code'=>'506'),
	'CU'=>array('name'=>'CUBA','code'=>'53'),
	'CV'=>array('name'=>'CAPE VERDE','code'=>'238'),
	'CX'=>array('name'=>'CHRISTMAS ISLAND','code'=>'61'),
	'CY'=>array('name'=>'CYPRUS','code'=>'357'),
	'CZ'=>array('name'=>'CZECH REPUBLIC','code'=>'420'),
	'DE'=>array('name'=>'GERMANY','code'=>'49'),
	'DJ'=>array('name'=>'DJIBOUTI','code'=>'253'),
	'DK'=>array('name'=>'DENMARK','code'=>'45'),
	'DM'=>array('name'=>'DOMINICA','code'=>'1767'),
	'DO'=>array('name'=>'DOMINICAN REPUBLIC','code'=>'1809'),
	'DZ'=>array('name'=>'ALGERIA','code'=>'213'),
	'EC'=>array('name'=>'ECUADOR','code'=>'593'),
	'EE'=>array('name'=>'ESTONIA','code'=>'372'),
	'EG'=>array('name'=>'EGYPT','code'=>'20'),
	'ER'=>array('name'=>'ERITREA','code'=>'291'),
	'ES'=>array('name'=>'SPAIN','code'=>'34'),
	'ET'=>array('name'=>'ETHIOPIA','code'=>'251'),
	'FI'=>array('name'=>'FINLAND','code'=>'358'),
	'FJ'=>array('name'=>'FIJI','code'=>'679'),
	'FK'=>array('name'=>'FALKLAND ISLANDS (MALVINAS)','code'=>'500'),
	'FM'=>array('name'=>'MICRONESIA, FEDERATED STATES OF','code'=>'691'),
	'FO'=>array('name'=>'FAROE ISLANDS','code'=>'298'),
	'FR'=>array('name'=>'FRANCE','code'=>'33'),
	'GA'=>array('name'=>'GABON','code'=>'241'),
	'GB'=>array('name'=>'UNITED KINGDOM','code'=>'44'),
	'GD'=>array('name'=>'GRENADA','code'=>'1473'),
	'GE'=>array('name'=>'GEORGIA','code'=>'995'),
	'GH'=>array('name'=>'GHANA','code'=>'233'),
	'GI'=>array('name'=>'GIBRALTAR','code'=>'350'),
	'GL'=>array('name'=>'GREENLAND','code'=>'299'),
	'GM'=>array('name'=>'GAMBIA','code'=>'220'),
	'GN'=>array('name'=>'GUINEA','code'=>'224'),
	'GQ'=>array('name'=>'EQUATORIAL GUINEA','code'=>'240'),
	'GR'=>array('name'=>'GREECE','code'=>'30'),
	'GT'=>array('name'=>'GUATEMALA','code'=>'502'),
	'GU'=>array('name'=>'GUAM','code'=>'1671'),
	'GW'=>array('name'=>'GUINEA-BISSAU','code'=>'245'),
	'GY'=>array('name'=>'GUYANA','code'=>'592'),
	'HK'=>array('name'=>'HONG KONG','code'=>'852'),
	'HN'=>array('name'=>'HONDURAS','code'=>'504'),
	'HR'=>array('name'=>'CROATIA','code'=>'385'),
	'HT'=>array('name'=>'HAITI','code'=>'509'),
	'HU'=>array('name'=>'HUNGARY','code'=>'36'),
	'ID'=>array('name'=>'INDONESIA','code'=>'62'),
	'IE'=>array('name'=>'IRELAND','code'=>'353'),
	'IL'=>array('name'=>'ISRAEL','code'=>'972'),
	'IM'=>array('name'=>'ISLE OF MAN','code'=>'44'),
	'IN'=>array('name'=>'INDIA','code'=>'91'),
	'IQ'=>array('name'=>'IRAQ','code'=>'964'),
	'IR'=>array('name'=>'IRAN, ISLAMIC REPUBLIC OF','code'=>'98'),
	'IS'=>array('name'=>'ICELAND','code'=>'354'),
	'IT'=>array('name'=>'ITALY','code'=>'39'),
	'JM'=>array('name'=>'JAMAICA','code'=>'1876'),
	'JO'=>array('name'=>'JORDAN','code'=>'962'),
	'JP'=>array('name'=>'JAPAN','code'=>'81'),
	'KE'=>array('name'=>'KENYA','code'=>'254'),
	'KG'=>array('name'=>'KYRGYZSTAN','code'=>'996'),
	'KH'=>array('name'=>'CAMBODIA','code'=>'855'),
	'KI'=>array('name'=>'KIRIBATI','code'=>'686'),
	'KM'=>array('name'=>'COMOROS','code'=>'269'),
	'KN'=>array('name'=>'SAINT KITTS AND NEVIS','code'=>'1869'),
	'KP'=>array('name'=>'KOREA DEMOCRATIC PEOPLES REPUBLIC OF','code'=>'850'),
	'KR'=>array('name'=>'KOREA REPUBLIC OF','code'=>'82'),
	'KW'=>array('name'=>'KUWAIT','code'=>'965'),
	'KY'=>array('name'=>'CAYMAN ISLANDS','code'=>'1345'),
	'KZ'=>array('name'=>'KAZAKSTAN','code'=>'7'),
	'LA'=>array('name'=>'LAO PEOPLES DEMOCRATIC REPUBLIC','code'=>'856'),
	'LB'=>array('name'=>'LEBANON','code'=>'961'),
	'LC'=>array('name'=>'SAINT LUCIA','code'=>'1758'),
	'LI'=>array('name'=>'LIECHTENSTEIN','code'=>'423'),
	'LK'=>array('name'=>'SRI LANKA','code'=>'94'),
	'LR'=>array('name'=>'LIBERIA','code'=>'231'),
	'LS'=>array('name'=>'LESOTHO','code'=>'266'),
	'LT'=>array('name'=>'LITHUANIA','code'=>'370'),
	'LU'=>array('name'=>'LUXEMBOURG','code'=>'352'),
	'LV'=>array('name'=>'LATVIA','code'=>'371'),
	'LY'=>array('name'=>'LIBYAN ARAB JAMAHIRIYA','code'=>'218'),
	'MA'=>array('name'=>'MOROCCO','code'=>'212'),
	'MC'=>array('name'=>'MONACO','code'=>'377'),
	'MD'=>array('name'=>'MOLDOVA, REPUBLIC OF','code'=>'373'),
	'ME'=>array('name'=>'MONTENEGRO','code'=>'382'),
	'MF'=>array('name'=>'SAINT MARTIN','code'=>'1599'),
	'MG'=>array('name'=>'MADAGASCAR','code'=>'261'),
	'MH'=>array('name'=>'MARSHALL ISLANDS','code'=>'692'),
	'MK'=>array('name'=>'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF','code'=>'389'),
	'ML'=>array('name'=>'MALI','code'=>'223'),
	'MM'=>array('name'=>'MYANMAR','code'=>'95'),
	'MN'=>array('name'=>'MONGOLIA','code'=>'976'),
	'MO'=>array('name'=>'MACAU','code'=>'853'),
	'MP'=>array('name'=>'NORTHERN MARIANA ISLANDS','code'=>'1670'),
	'MR'=>array('name'=>'MAURITANIA','code'=>'222'),
	'MS'=>array('name'=>'MONTSERRAT','code'=>'1664'),
	'MT'=>array('name'=>'MALTA','code'=>'356'),
	'MU'=>array('name'=>'MAURITIUS','code'=>'230'),
	'MV'=>array('name'=>'MALDIVES','code'=>'960'),
	'MW'=>array('name'=>'MALAWI','code'=>'265'),
	'MX'=>array('name'=>'MEXICO','code'=>'52'),
	'MY'=>array('name'=>'MALAYSIA','code'=>'60'),
	'MZ'=>array('name'=>'MOZAMBIQUE','code'=>'258'),
	'NA'=>array('name'=>'NAMIBIA','code'=>'264'),
	'NC'=>array('name'=>'NEW CALEDONIA','code'=>'687'),
	'NE'=>array('name'=>'NIGER','code'=>'227'),
	'NG'=>array('name'=>'NIGERIA','code'=>'234'),
	'NI'=>array('name'=>'NICARAGUA','code'=>'505'),
	'NL'=>array('name'=>'NETHERLANDS','code'=>'31'),
	'NO'=>array('name'=>'NORWAY','code'=>'47'),
	'NP'=>array('name'=>'NEPAL','code'=>'977'),
	'NR'=>array('name'=>'NAURU','code'=>'674'),
	'NU'=>array('name'=>'NIUE','code'=>'683'),
	'NZ'=>array('name'=>'NEW ZEALAND','code'=>'64'),
	'OM'=>array('name'=>'OMAN','code'=>'968'),
	'PA'=>array('name'=>'PANAMA','code'=>'507'),
	'PE'=>array('name'=>'PERU','code'=>'51'),
	'PF'=>array('name'=>'FRENCH POLYNESIA','code'=>'689'),
	'PG'=>array('name'=>'PAPUA NEW GUINEA','code'=>'675'),
	'PH'=>array('name'=>'PHILIPPINES','code'=>'63'),
	'PK'=>array('name'=>'PAKISTAN','code'=>'92'),
	'PL'=>array('name'=>'POLAND','code'=>'48'),
	'PM'=>array('name'=>'SAINT PIERRE AND MIQUELON','code'=>'508'),
	'PN'=>array('name'=>'PITCAIRN','code'=>'870'),
	'PR'=>array('name'=>'PUERTO RICO','code'=>'1'),
	'PT'=>array('name'=>'PORTUGAL','code'=>'351'),
	'PW'=>array('name'=>'PALAU','code'=>'680'),
	'PY'=>array('name'=>'PARAGUAY','code'=>'595'),
	'QA'=>array('name'=>'QATAR','code'=>'974'),
	'RO'=>array('name'=>'ROMANIA','code'=>'40'),
	'RS'=>array('name'=>'SERBIA','code'=>'381'),
	'RU'=>array('name'=>'RUSSIAN FEDERATION','code'=>'7'),
	'RW'=>array('name'=>'RWANDA','code'=>'250'),
	'SA'=>array('name'=>'SAUDI ARABIA','code'=>'966'),
	'SB'=>array('name'=>'SOLOMON ISLANDS','code'=>'677'),
	'SC'=>array('name'=>'SEYCHELLES','code'=>'248'),
	'SD'=>array('name'=>'SUDAN','code'=>'249'),
	'SE'=>array('name'=>'SWEDEN','code'=>'46'),
	'SG'=>array('name'=>'SINGAPORE','code'=>'65'),
	'SH'=>array('name'=>'SAINT HELENA','code'=>'290'),
	'SI'=>array('name'=>'SLOVENIA','code'=>'386'),
	'SK'=>array('name'=>'SLOVAKIA','code'=>'421'),
	'SL'=>array('name'=>'SIERRA LEONE','code'=>'232'),
	'SM'=>array('name'=>'SAN MARINO','code'=>'378'),
	'SN'=>array('name'=>'SENEGAL','code'=>'221'),
	'SO'=>array('name'=>'SOMALIA','code'=>'252'),
	'SR'=>array('name'=>'SURINAME','code'=>'597'),
	'ST'=>array('name'=>'SAO TOME AND PRINCIPE','code'=>'239'),
	'SV'=>array('name'=>'EL SALVADOR','code'=>'503'),
	'SY'=>array('name'=>'SYRIAN ARAB REPUBLIC','code'=>'963'),
	'SZ'=>array('name'=>'SWAZILAND','code'=>'268'),
	'TC'=>array('name'=>'TURKS AND CAICOS ISLANDS','code'=>'1649'),
	'TD'=>array('name'=>'CHAD','code'=>'235'),
	'TG'=>array('name'=>'TOGO','code'=>'228'),
	'TH'=>array('name'=>'THAILAND','code'=>'66'),
	'TJ'=>array('name'=>'TAJIKISTAN','code'=>'992'),
	'TK'=>array('name'=>'TOKELAU','code'=>'690'),
	'TL'=>array('name'=>'TIMOR-LESTE','code'=>'670'),
	'TM'=>array('name'=>'TURKMENISTAN','code'=>'993'),
	'TN'=>array('name'=>'TUNISIA','code'=>'216'),
	'TO'=>array('name'=>'TONGA','code'=>'676'),
	'TR'=>array('name'=>'TURKEY','code'=>'90'),
	'TT'=>array('name'=>'TRINIDAD AND TOBAGO','code'=>'1868'),
	'TV'=>array('name'=>'TUVALU','code'=>'688'),
	'TW'=>array('name'=>'TAIWAN, PROVINCE OF CHINA','code'=>'886'),
	'TZ'=>array('name'=>'TANZANIA, UNITED REPUBLIC OF','code'=>'255'),
	'UA'=>array('name'=>'UKRAINE','code'=>'380'),
	'UG'=>array('name'=>'UGANDA','code'=>'256'),
	'US'=>array('name'=>'UNITED STATES','code'=>'1'),
	'UY'=>array('name'=>'URUGUAY','code'=>'598'),
	'UZ'=>array('name'=>'UZBEKISTAN','code'=>'998'),
	'VA'=>array('name'=>'HOLY SEE (VATICAN CITY STATE)','code'=>'39'),
	'VC'=>array('name'=>'SAINT VINCENT AND THE GRENADINES','code'=>'1784'),
	'VE'=>array('name'=>'VENEZUELA','code'=>'58'),
	'VG'=>array('name'=>'VIRGIN ISLANDS, BRITISH','code'=>'1284'),
	'VI'=>array('name'=>'VIRGIN ISLANDS, U.S.','code'=>'1340'),
	'VN'=>array('name'=>'VIET NAM','code'=>'84'),
	'VU'=>array('name'=>'VANUATU','code'=>'678'),
	'WF'=>array('name'=>'WALLIS AND FUTUNA','code'=>'681'),
	'WS'=>array('name'=>'SAMOA','code'=>'685'),
	'XK'=>array('name'=>'KOSOVO','code'=>'381'),
	'YE'=>array('name'=>'YEMEN','code'=>'967'),
	'YT'=>array('name'=>'MAYOTTE','code'=>'262'),
	'ZA'=>array('name'=>'SOUTH AFRICA','code'=>'27'),
	'ZM'=>array('name'=>'ZAMBIA','code'=>'260'),
	'ZW'=>array('name'=>'ZIMBABWE','code'=>'263'));

function countrySelector($defaultCountry = "", $id = "", $name = "", $classes = "") {

	global $countryArray; // Assuming the array is placed above this function
	
	$output = "<select id='".$id."' name='".$name."' class='".$classes."'>";
	
	foreach($countryArray as $code => $country){
	
		$country_line = ucwords(strtolower($country["name"])); // Making it look good
		$dialCode = ucwords(strtolower($country["code"]));
		
		$output .= "<option value='".$code."' ".(($code==strtoupper($defaultCountry))?"selected":"").">".$code." - ". $country_line ." (+". $dialCode .")</option>";
	}
	$output .= "</select>";
	return $output; // or echo $output; to print directly
}
fname_check($fname){
	if ($fname == NULL) {
		$fnerror = 'Name Fields cannot be empty.';
	} else if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
	/*From <https://www.guru99.com/php-regular-expressions.html> */
		$fnerror = 'Must not contain symbols or numbers.';
	} else {
		$fname = $fname;
	} 
	return;
}
lname_check($lname){
	if ($lname = NULL) {
		$lnerror = 'Name Fields cannot be empty.';
	} else if !preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
		$fnerror = 'Must not contain symbols or numbers.';
	else {
		$lname = $lname;
	}
	return;
}
email_check($email){
	$email = preg_replace('/[^A-Za-z0-9\-\.\@\_]/', '', $email);
	$dbname = users;
	$connect = connect($dbname);
	$result = 'select * from users where userID = $email';
	if(empty($email)){
		$emerror = 'Email Field cannot be empty.';
	}else if($result == true){
		$email = $email;
	}else if (!preg_replace('/[^A-Za-z0-9\-\.\@\_]/', '', $email)){
		$emerror = 'Something is wrong with your email syntax.'
	}else{
		$email = preg_replace('/[^A-Za-z0-9\-\.\@\_]/', '', $email);
	}
	disconnect($connect);
	return;
}
first_line_check($first_line){
	if ($first_line = NULL) {
		$first_line_error = 'Address Fields cannot be empty.';
	} else if (!preg_match("/^[0-9a-zA-Z-' ]*$/", $first_line)) {
		$first_line_error = 'Must not contain symbols.';
	else {
		$first_line = $first_line;
	}
	return;
}
second_line_check($second_line){
	if ($second_line = NULL) {
		$second_line_error = 'Address Fields cannot be empty.';
	} else if (!preg_match("/^[a-zA-Z-' ]*$/", $second_line)) {
		$second_line_error = 'Must not contain symbols.';
	else {
		$second_line = $second_line;
	}
	return;
}
town_line_check($town_line){
	if ($town_line = NULL) {
		$town_line_error = 'Must add your Town / City.';
	} else if (!preg_match("/^[a-zA-Z-' ]*$/", $town_line)) { 
		$town_line_error = 'Must not contain symbols.';
	else {
		$town_line = $town_line;
	}
	return;
}
county_line_check($county_line){
	if ($county_line = NULL) {
		$county_line_error = 'County cannot be empty.';
	} else if (!preg_match("/^[a-zA-Z-' ]*$/", $town_line)) {
		$county_line_error = 'Must not contain symbols.';
	else {
		$county_line = $county_line;
	}
	return;
}
postal_line_check($postal_line, $country_line){
	/* See Christian Hoegl Postal Validator Class in PHP */
	$valid = new Validator();
	$valid.isValid($country_line, $postal_line);
	if ($postal_line = NULL) {
		$postal_line_error = 'Postal field cannot be empty.';
	} else if ($county_line == NULL) {
		$postal_line_error = 'Must select a country.';
	} else if(!$valid) {
		$postal_line_error = 'Postal / Zip Code is invalid.';
	else {
		$postal_line = $postal_line;
	}
	return;
}
country_line_check($country_line){
	if ($country_line = NULL) {
		$country_line_error = 'Must select a Country.';
		echo countrySelector("---");
	} else {
		$country_line => $country_line;
	}
	return;
}
function dialcode($country_line) {
	$dialcode = 0
	if (!$country_line = NULL) {
		$dialcode = intval($dialCode);
	} else {
		$country_line_error = 'Must select your Country';
	}
	return;
}
//TODO: to integer or to string
home_phone($dialcode, $home_line) {
	$homephone = intval($dialcode . $home_line);
	return $homephone; 
}
mobile_phone($dialcode, $home_line) {
	$mobilephone = intval($dialcode . $mobile_line);
	return $mobilphone; 
}

function customer($title, $fname, $lname, $first_line, $second_line, $town_line, $county_line, $postal_line, $country_line, $home_line, $mobile_line) {
	$title;
	$fname => fname_check($fname);
	$lname => lname_check($lname);
	$email => email_check($email);
	$first_line => first_line_check($first_line); 
	$second_line => second_line_check($second_line);
	$town_line => town_line_check($town_line);
	$county_line => county_line_check($county_line);
	$postal_line => postal_line_check($postal_line, $country_line);
	$country_line => country_line_check($country_line);
	$dialcode => dialcode($country_line);
	$homephone => home_phone($dialcode, $home_line);
	$mobilephone => mobile_phone($dialcode, $home_line);
	
	$dbname = customers;
	connect_customer($dbname);
	$result = new mysqli_query($connect_customer, 'insert into customers (title, first_line, second_line, town_line, county_line, postal_line, country_line, home_line, mobile_line) values ('.$title'., '.$first_line.', '.$second_line.', '.$town_line.', '.$county_line.', '.$postal_line.', '.$country_line.', '.$home_line.', '.$mobile_line.') where email is '.$email.' and fname is '.$fname.' and lname is '.$lname.'', MYSQLI_USE_RESULT);
	disconnect($connect_customers);
	$dbname = users;
	connect_user($dbname);
	new mysqli_query($connect_user, 'update users set customer = Y and customer_id = add foreign key (customer_id) reference customers(customer_id) where user is '.$email.'', MYSQLI_USE_RESULT);
	disconnect($connect_user);
	//TODO: where user is (from session or logged in account)??????;
	
}

//Cancel and clear Buttons

?>
