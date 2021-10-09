<?php
/**
 * A JSON string of the 2 digit country codes and their corresponding labels
 */

$region_labels = '
{"AF":"Southern Asia","AX":"Northern Europe","AL":"Southern Europe","DZ":"Northern Africa","AS":"Polynesia","AD":"Southern Europe","AO":"Sub-Saharan Africa","AI":"Latin America and the Caribbean","AQ":"","AG":"Latin America and the Caribbean","AR":"Latin America and the Caribbean","AM":"Western Asia","AW":"Latin America and the Caribbean","AU":"Australia and New Zealand","AT":"Western Europe","AZ":"Western Asia","BS":"Latin America and the Caribbean","BH":"Western Asia","BD":"Southern Asia","BB":"Latin America and the Caribbean","BY":"Eastern Europe","BE":"Western Europe","BZ":"Latin America and the Caribbean","BJ":"Sub-Saharan Africa","BM":"Northern America","BT":"Southern Asia","BO":"Latin America and the Caribbean","BQ":"Latin America and the Caribbean","BA":"Southern Europe","BW":"Sub-Saharan Africa","BV":"Latin America and the Caribbean","BR":"Latin America and the Caribbean","IO":"Sub-Saharan Africa","BN":"South-eastern Asia","BG":"Eastern Europe","BF":"Sub-Saharan Africa","BI":"Sub-Saharan Africa","CV":"Sub-Saharan Africa","KH":"South-eastern Asia","CM":"Sub-Saharan Africa","CA":"Northern America","KY":"Latin America and the Caribbean","CF":"Sub-Saharan Africa","TD":"Sub-Saharan Africa","CL":"Latin America and the Caribbean","CN":"Eastern Asia","CX":"Australia and New Zealand","CC":"Australia and New Zealand","CO":"Latin America and the Caribbean","KM":"Sub-Saharan Africa","CG":"Sub-Saharan Africa","CD":"Sub-Saharan Africa","CK":"Polynesia","CR":"Latin America and the Caribbean","CI":"Sub-Saharan Africa","HR":"Southern Europe","CU":"Latin America and the Caribbean","CW":"Latin America and the Caribbean","CY":"Western Asia","CZ":"Eastern Europe","DK":"Northern Europe","DJ":"Sub-Saharan Africa","DM":"Latin America and the Caribbean","DO":"Latin America and the Caribbean","EC":"Latin America and the Caribbean","EG":"Northern Africa","SV":"Latin America and the Caribbean","GQ":"Sub-Saharan Africa","ER":"Sub-Saharan Africa","EE":"Northern Europe","SZ":"Sub-Saharan Africa","ET":"Sub-Saharan Africa","FK":"Latin America and the Caribbean","FO":"Northern Europe","FJ":"Melanesia","FI":"Northern Europe","FR":"Western Europe","GF":"Latin America and the Caribbean","PF":"Polynesia","TF":"Sub-Saharan Africa","GA":"Sub-Saharan Africa","GM":"Sub-Saharan Africa","GE":"Western Asia","DE":"Western Europe","GH":"Sub-Saharan Africa","GI":"Southern Europe","GR":"Southern Europe","GL":"Northern America","GD":"Latin America and the Caribbean","GP":"Latin America and the Caribbean","GU":"Micronesia","GT":"Latin America and the Caribbean","GG":"Northern Europe","GN":"Sub-Saharan Africa","GW":"Sub-Saharan Africa","GY":"Latin America and the Caribbean","HT":"Latin America and the Caribbean","HM":"Australia and New Zealand","VA":"Southern Europe","HN":"Latin America and the Caribbean","HK":"Eastern Asia","HU":"Eastern Europe","IS":"Northern Europe","IN":"Southern Asia","ID":"South-eastern Asia","IR":"Southern Asia","IQ":"Western Asia","IE":"Northern Europe","IM":"Northern Europe","IL":"Western Asia","IT":"Southern Europe","JM":"Latin America and the Caribbean","JP":"Eastern Asia","JE":"Northern Europe","JO":"Western Asia","KZ":"Central Asia","KE":"Sub-Saharan Africa","KI":"Micronesia","KP":"Eastern Asia","KR":"Eastern Asia","KW":"Western Asia","KG":"Central Asia","LA":"South-eastern Asia","LV":"Northern Europe","LB":"Western Asia","LS":"Sub-Saharan Africa","LR":"Sub-Saharan Africa","LY":"Northern Africa","LI":"Western Europe","LT":"Northern Europe","LU":"Western Europe","MO":"Eastern Asia","MG":"Sub-Saharan Africa","MW":"Sub-Saharan Africa","MY":"South-eastern Asia","MV":"Southern Asia","ML":"Sub-Saharan Africa","MT":"Southern Europe","MH":"Micronesia","MQ":"Latin America and the Caribbean","MR":"Sub-Saharan Africa","MU":"Sub-Saharan Africa","YT":"Sub-Saharan Africa","MX":"Latin America and the Caribbean","FM":"Micronesia","MD":"Eastern Europe","MC":"Western Europe","MN":"Eastern Asia","ME":"Southern Europe","MS":"Latin America and the Caribbean","MA":"Northern Africa","MZ":"Sub-Saharan Africa","MM":"South-eastern Asia","NA":"Sub-Saharan Africa","NR":"Micronesia","NP":"Southern Asia","NL":"Western Europe","NC":"Melanesia","NZ":"Australia and New Zealand","NI":"Latin America and the Caribbean","NE":"Sub-Saharan Africa","NG":"Sub-Saharan Africa","NU":"Polynesia","NF":"Australia and New Zealand","MK":"Southern Europe","MP":"Micronesia","NO":"Northern Europe","OM":"Western Asia","PK":"Southern Asia","PW":"Micronesia","PS":"Western Asia","PA":"Latin America and the Caribbean","PG":"Melanesia","PY":"Latin America and the Caribbean","PE":"Latin America and the Caribbean","PH":"South-eastern Asia","PN":"Polynesia","PL":"Eastern Europe","PT":"Southern Europe","PR":"Latin America and the Caribbean","QA":"Western Asia","RE":"Sub-Saharan Africa","RO":"Eastern Europe","RU":"Eastern Europe","RW":"Sub-Saharan Africa","BL":"Latin America and the Caribbean","SH":"Sub-Saharan Africa","KN":"Latin America and the Caribbean","LC":"Latin America and the Caribbean","MF":"Latin America and the Caribbean","PM":"Northern America","VC":"Latin America and the Caribbean","WS":"Polynesia","SM":"Southern Europe","ST":"Sub-Saharan Africa","SA":"Western Asia","SN":"Sub-Saharan Africa","RS":"Southern Europe","SC":"Sub-Saharan Africa","SL":"Sub-Saharan Africa","SG":"South-eastern Asia","SX":"Latin America and the Caribbean","SK":"Eastern Europe","SI":"Southern Europe","SB":"Melanesia","SO":"Sub-Saharan Africa","ZA":"Sub-Saharan Africa","GS":"Latin America and the Caribbean","SS":"Sub-Saharan Africa","ES":"Southern Europe","LK":"Southern Asia","SD":"Northern Africa","SR":"Latin America and the Caribbean","SJ":"Northern Europe","SE":"Northern Europe","CH":"Western Europe","SY":"Western Asia","TW":"Eastern Asia","TJ":"Central Asia","TZ":"Sub-Saharan Africa","TH":"South-eastern Asia","TL":"South-eastern Asia","TG":"Sub-Saharan Africa","TK":"Polynesia","TO":"Polynesia","TT":"Latin America and the Caribbean","TN":"Northern Africa","TR":"Western Asia","TM":"Central Asia","TC":"Latin America and the Caribbean","TV":"Polynesia","UG":"Sub-Saharan Africa","UA":"Eastern Europe","AE":"Western Asia","GB":"Northern Europe","US":"Northern America","UM":"Micronesia","UY":"Latin America and the Caribbean","UZ":"Central Asia","VU":"Melanesia","VE":"Latin America and the Caribbean","VN":"South-eastern Asia","VG":"Latin America and the Caribbean","VI":"Latin America and the Caribbean","WF":"Polynesia","EH":"Northern Africa","YE":"Western Asia","ZM":"Sub-Saharan Africa","ZW":"Sub-Saharan Africa"}';

return json_decode( $region_labels, true );