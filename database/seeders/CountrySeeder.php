<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'title' => 'Afghanistan', 'code' => 'AF'],
            ['id' => 2, 'title' => 'Albania', 'code' => 'AL'],
            ['id' => 3, 'title' => 'Algeria', 'code' => 'DZ'],
            ['id' => 4, 'title' => 'American Samoa', 'code' => 'AS'],
            ['id' => 5, 'title' => 'Andorra', 'code' => 'AD'],
            ['id' => 6, 'title' => 'Angola', 'code' => 'AO'],
            ['id' => 7, 'title' => 'Anguilla', 'code' => 'AI'],
            ['id' => 8, 'title' => 'Antarctica', 'code' => 'AQ'],
            ['id' => 9, 'title' => 'Antigua and Barbuda', 'code' => 'AG'],
            ['id' => 10, 'title' => 'Argentina', 'code' => 'AR'],
            ['id' => 11, 'title' => 'Armenia', 'code' => 'AM'],
            ['id' => 12, 'title' => 'Aruba', 'code' => 'AW'],
            ['id' => 13, 'title' => 'Australia', 'code' => 'AU'],
            ['id' => 14, 'title' => 'Austria', 'code' => 'AT'],
            ['id' => 15, 'title' => 'Azerbaijan', 'code' => 'AZ'],
            ['id' => 16, 'title' => 'Bahamas', 'code' => 'BS'],
            ['id' => 17, 'title' => 'Bahrain', 'code' => 'BH'],
            ['id' => 18, 'title' => 'Bangladesh', 'code' => 'BD'],
            ['id' => 19, 'title' => 'Barbados', 'code' => 'BB'],
            ['id' => 20, 'title' => 'Belarus', 'code' => 'BY'],
            ['id' => 21, 'title' => 'Belgium', 'code' => 'BE'],
            ['id' => 22, 'title' => 'Belize', 'code' => 'BZ'],
            ['id' => 23, 'title' => 'Benin', 'code' => 'BJ'],
            ['id' => 24, 'title' => 'Bermuda', 'code' => 'BM'],
            ['id' => 25, 'title' => 'Bhutan', 'code' => 'BT'],
            ['id' => 26, 'title' => 'Bolivia (Plurinational State of)', 'code' => 'BO'],
            ['id' => 27, 'title' => 'Bonaire, Sint Eustatius and Saba', 'code' => 'BQ'],
            ['id' => 28, 'title' => 'Bosnia and Herzegovina', 'code' => 'BA'],
            ['id' => 29, 'title' => 'Botswana', 'code' => 'BW'],
            ['id' => 30, 'title' => 'Bouvet Island', 'code' => 'BV'],
            ['id' => 31, 'title' => 'Brazil', 'code' => 'BR'],
            ['id' => 32, 'title' => 'British Indian Ocean Territory', 'code' => 'IO'],
            ['id' => 33, 'title' => 'Brunei Darussalam', 'code' => 'BN'],
            ['id' => 34, 'title' => 'Bulgaria', 'code' => 'BG'],
            ['id' => 35, 'title' => 'Burkina Faso', 'code' => 'BF'],
            ['id' => 36, 'title' => 'Burundi', 'code' => 'BI'],
            ['id' => 37, 'title' => 'Cabo Verde', 'code' => 'CV'],
            ['id' => 38, 'title' => 'Cambodia', 'code' => 'KH'],
            ['id' => 39, 'title' => 'Cameroon', 'code' => 'CM'],
            ['id' => 40, 'title' => 'Canada', 'code' => 'CA'],
            ['id' => 41, 'title' => 'Cayman Islands', 'code' => 'KY'],
            ['id' => 42, 'title' => 'Central African Republic', 'code' => 'CF'],
            ['id' => 43, 'title' => 'Chad', 'code' => 'TD'],
            ['id' => 44, 'title' => 'Chile', 'code' => 'CL'],
            ['id' => 45, 'title' => 'China', 'code' => 'CN'],
            ['id' => 46, 'title' => 'Christmas Island', 'code' => 'CX'],
            ['id' => 47, 'title' => 'Cocos (Keeling) Islands', 'code' => 'CC'],
            ['id' => 48, 'title' => 'Colombia', 'code' => 'CO'],
            ['id' => 49, 'title' => 'Comoros', 'code' => 'KM'],
            ['id' => 50, 'title' => 'Congo (the Democratic Republic of the)', 'code' => 'CD'],
            ['id' => 51, 'title' => 'Congo', 'code' => 'CG'],
            ['id' => 52, 'title' => 'Cook Islands', 'code' => 'CK'],
            ['id' => 53, 'title' => 'Costa Rica', 'code' => 'CR'],
            ['id' => 54, 'title' => 'Croatia', 'code' => 'HR'],
            ['id' => 55, 'title' => 'Cuba', 'code' => 'CU'],
            ['id' => 56, 'title' => 'Curaçao', 'code' => 'CW'],
            ['id' => 57, 'title' => 'Cyprus', 'code' => 'CY'],
            ['id' => 58, 'title' => 'Czechia', 'code' => 'CZ'],
            ['id' => 59, 'title' => "Côte d'Ivoire", 'code' => 'CI'],
            ['id' => 60, 'title' => 'Denmark', 'code' => 'DK'],
            ['id' => 61, 'title' => 'Djibouti', 'code' => 'DJ'],
            ['id' => 62, 'title' => 'Dominica', 'code' => 'DM'],
            ['id' => 63, 'title' => 'Dominican Republic', 'code' => 'DO'],
            ['id' => 64, 'title' => 'Ecuador', 'code' => 'EC'],
            ['id' => 65, 'title' => 'Egypt', 'code' => 'EG'],
            ['id' => 66, 'title' => 'El Salvador', 'code' => 'SV'],
            ['id' => 67, 'title' => 'Equatorial Guinea', 'code' => 'GQ'],
            ['id' => 68, 'title' => 'Eritrea', 'code' => 'ER'],
            ['id' => 69, 'title' => 'Estonia', 'code' => 'EE'],
            ['id' => 70, 'title' => 'Eswatini', 'code' => 'SZ'],
            ['id' => 71, 'title' => 'Ethiopia', 'code' => 'ET'],
            ['id' => 72, 'title' => 'Falkland Islands [Malvinas]', 'code' => 'FK'],
            ['id' => 73, 'title' => 'Faroe Islands', 'code' => 'FO'],
            ['id' => 74, 'title' => 'Fiji', 'code' => 'FJ'],
            ['id' => 75, 'title' => 'Finland', 'code' => 'FI'],
            ['id' => 76, 'title' => 'France', 'code' => 'FR'],
            ['id' => 77, 'title' => 'French Guiana', 'code' => 'GF'],
            ['id' => 78, 'title' => 'French Polynesia', 'code' => 'PF'],
            ['id' => 79, 'title' => 'French Southern Territories', 'code' => 'TF'],
            ['id' => 80, 'title' => 'Gabon', 'code' => 'GA'],
            ['id' => 81, 'title' => 'Gambia', 'code' => 'GM'],
            ['id' => 82, 'title' => 'Georgia', 'code' => 'GE'],
            ['id' => 83, 'title' => 'Germany', 'code' => 'DE'],
            ['id' => 84, 'title' => 'Ghana', 'code' => 'GH'],
            ['id' => 85, 'title' => 'Gibraltar', 'code' => 'GI'],
            ['id' => 86, 'title' => 'Greece', 'code' => 'GR'],
            ['id' => 87, 'title' => 'Greenland', 'code' => 'GL'],
            ['id' => 88, 'title' => 'Grenada', 'code' => 'GD'],
            ['id' => 89, 'title' => 'Guadeloupe', 'code' => 'GP'],
            ['id' => 90, 'title' => 'Guam', 'code' => 'GU'],
            ['id' => 91, 'title' => 'Guatemala', 'code' => 'GT'],
            ['id' => 92, 'title' => 'Guernsey', 'code' => 'GG'],
            ['id' => 93, 'title' => 'Guinea', 'code' => 'GN'],
            ['id' => 94, 'title' => 'Guinea-Bissau', 'code' => 'GW'],
            ['id' => 95, 'title' => 'Guyana', 'code' => 'GY'],
            ['id' => 96, 'title' => 'Haiti', 'code' => 'HT'],
            ['id' => 97, 'title' => 'Heard Island and McDonald Islands', 'code' => 'HM'],
            ['id' => 98, 'title' => 'Holy See', 'code' => 'VA'],
            ['id' => 99, 'title' => 'Honduras', 'code' => 'HN'],
            ['id' => 100, 'title' => 'Hong Kong', 'code' => 'HK'],
            ['id' => 101, 'title' => 'Hungary', 'code' => 'HU'],
            ['id' => 102, 'title' => 'Iceland', 'code' => 'IS'],
            ['id' => 103, 'title' => 'India', 'code' => 'IN'],
            ['id' => 104, 'title' => 'Indonesia', 'code' => 'ID'],
            ['id' => 105, 'title' => 'Iran (Islamic Republic of)', 'code' => 'IR'],
            ['id' => 106, 'title' => 'Iraq', 'code' => 'IQ'],
            ['id' => 107, 'title' => 'Ireland', 'code' => 'IE'],
            ['id' => 108, 'title' => 'Isle of Man', 'code' => 'IM'],
            ['id' => 109, 'title' => 'Israel', 'code' => 'IL'],
            ['id' => 110, 'title' => 'Italy', 'code' => 'IT'],
            ['id' => 111, 'title' => 'Jamaica', 'code' => 'JM'],
            ['id' => 112, 'title' => 'Japan', 'code' => 'JP'],
            ['id' => 113, 'title' => 'Jersey', 'code' => 'JE'],
            ['id' => 114, 'title' => 'Jordan', 'code' => 'JO'],
            ['id' => 115, 'title' => 'Kazakhstan', 'code' => 'KZ'],
            ['id' => 116, 'title' => 'Kenya', 'code' => 'KE'],
            ['id' => 117, 'title' => 'Kiribati', 'code' => 'KI'],
            ['id' => 118, 'title' => 'Korea (the Democratic People`s Republic of)', 'code' => 'KP'],
            ['id' => 119, 'title' => 'Korea (the Republic of)', 'code' => 'KR'],
            ['id' => 120, 'title' => 'Kuwait', 'code' => 'KW'],
            ['id' => 121, 'title' => 'Kyrgyzstan', 'code' => 'KG'],
            ['id' => 122, 'title' => "Lao People's Democratic Republic", 'code' => 'LA'],
            ['id' => 123, 'title' => 'Latvia', 'code' => 'LV'],
            ['id' => 124, 'title' => 'Lebanon', 'code' => 'LB'],
            ['id' => 125, 'title' => 'Lesotho', 'code' => 'LS'],
            ['id' => 126, 'title' => 'Liberia', 'code' => 'LR'],
            ['id' => 127, 'title' => 'Libya', 'code' => 'LY'],
            ['id' => 128, 'title' => 'Liechtenstein', 'code' => 'LI'],
            ['id' => 129, 'title' => 'Lithuania', 'code' => 'LT'],
            ['id' => 130, 'title' => 'Luxembourg', 'code' => 'LU'],
            ['id' => 131, 'title' => 'Macao', 'code' => 'MO'],
            ['id' => 132, 'title' => 'Madagascar', 'code' => 'MG'],
            ['id' => 133, 'title' => 'Malawi', 'code' => 'MW'],
            ['id' => 134, 'title' => 'Malaysia', 'code' => 'MY'],
            ['id' => 135, 'title' => 'Maldives', 'code' => 'MV'],
            ['id' => 136, 'title' => 'Mali', 'code' => 'ML'],
            ['id' => 137, 'title' => 'Malta', 'code' => 'MT'],
            ['id' => 138, 'title' => 'Marshall Islands', 'code' => 'MH'],
            ['id' => 139, 'title' => 'Martinique', 'code' => 'MQ'],
            ['id' => 140, 'title' => 'Mauritania', 'code' => 'MR'],
            ['id' => 141, 'title' => 'Mauritius', 'code' => 'MU'],
            ['id' => 142, 'title' => 'Mayotte', 'code' => 'YT'],
            ['id' => 143, 'title' => 'Mexico', 'code' => 'MX'],
            ['id' => 144, 'title' => 'Micronesia (Federated States of)', 'code' => 'FM'],
            ['id' => 145, 'title' => 'Moldova (the Republic of)', 'code' => 'MD'],
            ['id' => 146, 'title' => 'Monaco', 'code' => 'MC'],
            ['id' => 147, 'title' => 'Mongolia', 'code' => 'MN'],
            ['id' => 148, 'title' => 'Montenegro', 'code' => 'ME'],
            ['id' => 149, 'title' => 'Montserrat', 'code' => 'MS'],
            ['id' => 150, 'title' => 'Morocco', 'code' => 'MA'],
            ['id' => 151, 'title' => 'Mozambique', 'code' => 'MZ'],
            ['id' => 152, 'title' => 'Myanmar', 'code' => 'MM'],
            ['id' => 153, 'title' => 'Namibia', 'code' => 'NA'],
            ['id' => 154, 'title' => 'Nauru', 'code' => 'NR'],
            ['id' => 155, 'title' => 'Nepal', 'code' => 'NP'],
            ['id' => 156, 'title' => 'Netherlands', 'code' => 'NL'],
            ['id' => 157, 'title' => 'New Caledonia', 'code' => 'NC'],
            ['id' => 158, 'title' => 'New Zealand', 'code' => 'NZ'],
            ['id' => 159, 'title' => 'Nicaragua', 'code' => 'NI'],
            ['id' => 160, 'title' => 'Niger', 'code' => 'NE'],
            ['id' => 161, 'title' => 'Nigeria', 'code' => 'NG'],
            ['id' => 162, 'title' => 'Niue', 'code' => 'NU'],
            ['id' => 163, 'title' => 'Norfolk Island', 'code' => 'NF'],
            ['id' => 164, 'title' => 'Northern Mariana Islands', 'code' => 'MP'],
            ['id' => 165, 'title' => 'Norway', 'code' => 'NO'],
            ['id' => 166, 'title' => 'Oman', 'code' => 'OM'],
            ['id' => 167, 'title' => 'Pakistan', 'code' => 'PK'],
            ['id' => 168, 'title' => 'Palau', 'code' => 'PW'],
            ['id' => 169, 'title' => 'Palestine, State of', 'code' => 'PS'],
            ['id' => 170, 'title' => 'Panama', 'code' => 'PA'],
            ['id' => 171, 'title' => 'Papua New Guinea', 'code' => 'PG'],
            ['id' => 172, 'title' => 'Paraguay', 'code' => 'PY'],
            ['id' => 173, 'title' => 'Peru', 'code' => 'PE'],
            ['id' => 174, 'title' => 'Philippines', 'code' => 'PH'],
            ['id' => 175, 'title' => 'Pitcairn', 'code' => 'PN'],
            ['id' => 176, 'title' => 'Poland', 'code' => 'PL'],
            ['id' => 177, 'title' => 'Portugal', 'code' => 'PT'],
            ['id' => 178, 'title' => 'Puerto Rico', 'code' => 'PR'],
            ['id' => 179, 'title' => 'Qatar', 'code' => 'QA'],
            ['id' => 180, 'title' => 'Republic of North Macedonia', 'code' => 'MK'],
            ['id' => 181, 'title' => 'Romania', 'code' => 'RO'],
            ['id' => 182, 'title' => 'Russian Federation', 'code' => 'RU'],
            ['id' => 183, 'title' => 'Rwanda', 'code' => 'RW'],
            ['id' => 184, 'title' => 'Réunion', 'code' => 'RE'],
            ['id' => 185, 'title' => 'Saint Barthélemy', 'code' => 'BL'],
            ['id' => 186, 'title' => 'Saint Helena, Ascension and Tristan da Cunha', 'code' => 'SH'],
            ['id' => 187, 'title' => 'Saint Kitts and Nevis', 'code' => 'KN'],
            ['id' => 188, 'title' => 'Saint Lucia', 'code' => 'LC'],
            ['id' => 189, 'title' => 'Saint Martin (French part)', 'code' => 'MF'],
            ['id' => 190, 'title' => 'Saint Pierre and Miquelon', 'code' => 'PM'],
            ['id' => 191, 'title' => 'Saint Vincent and the Grenadines', 'code' => 'VC'],
            ['id' => 192, 'title' => 'Samoa', 'code' => 'WS'],
            ['id' => 193, 'title' => 'San Marino', 'code' => 'SM'],
            ['id' => 194, 'title' => 'Sao Tome and Principe', 'code' => 'ST'],
            ['id' => 195, 'title' => 'Saudi Arabia', 'code' => 'SA'],
            ['id' => 196, 'title' => 'Senegal', 'code' => 'SN'],
            ['id' => 197, 'title' => 'Serbia', 'code' => 'RS'],
            ['id' => 198, 'title' => 'Seychelles', 'code' => 'SC'],
            ['id' => 199, 'title' => 'Sierra Leone', 'code' => 'SL'],
            ['id' => 200, 'title' => 'Singapore', 'code' => 'SG'],
            ['id' => 201, 'title' => 'Sint Maarten (Dutch part)', 'code' => 'SX'],
            ['id' => 202, 'title' => 'Slovakia', 'code' => 'SK'],
            ['id' => 203, 'title' => 'Slovenia', 'code' => 'SI'],
            ['id' => 204, 'title' => 'Solomon Islands', 'code' => 'SB'],
            ['id' => 205, 'title' => 'Somalia', 'code' => 'SO'],
            ['id' => 206, 'title' => 'South Africa', 'code' => 'ZA'],
            ['id' => 207, 'title' => 'South Georgia and the South Sandwich Islands', 'code' => 'GS'],
            ['id' => 208, 'title' => 'South Sudan', 'code' => 'SS'],
            ['id' => 209, 'title' => 'Spain', 'code' => 'ES'],
            ['id' => 210, 'title' => 'Sri Lanka', 'code' => 'LK'],
            ['id' => 211, 'title' => 'Sudan', 'code' => 'SD'],
            ['id' => 212, 'title' => 'Suriname', 'code' => 'SR'],
            ['id' => 213, 'title' => 'Svalbard and Jan Mayen', 'code' => 'SJ'],
            ['id' => 214, 'title' => 'Sweden', 'code' => 'SE'],
            ['id' => 215, 'title' => 'Switzerland', 'code' => 'CH'],
            ['id' => 216, 'title' => 'Syrian Arab Republic', 'code' => 'SY'],
            ['id' => 217, 'title' => 'Taiwan (Province of China)', 'code' => 'TW'],
            ['id' => 218, 'title' => 'Tajikistan', 'code' => 'TJ'],
            ['id' => 219, 'title' => 'Tanzania, United Republic of', 'code' => 'TZ'],
            ['id' => 220, 'title' => 'Thailand', 'code' => 'TH'],
            ['id' => 221, 'title' => 'Timor-Leste', 'code' => 'TL'],
            ['id' => 222, 'title' => 'Togo', 'code' => 'TG'],
            ['id' => 223, 'title' => 'Tokelau', 'code' => 'TK'],
            ['id' => 224, 'title' => 'Tonga', 'code' => 'TO'],
            ['id' => 225, 'title' => 'Trinidad and Tobago', 'code' => 'TT'],
            ['id' => 226, 'title' => 'Tunisia', 'code' => 'TN'],
            ['id' => 227, 'title' => 'Turkey', 'code' => 'TR'],
            ['id' => 228, 'title' => 'Turkmenistan', 'code' => 'TM'],
            ['id' => 229, 'title' => 'Turks and Caicos Islands', 'code' => 'TC'],
            ['id' => 230, 'title' => 'Tuvalu', 'code' => 'TV'],
            ['id' => 231, 'title' => 'Uganda', 'code' => 'UG'],
            ['id' => 232, 'title' => 'Ukraine', 'code' => 'UA'],
            ['id' => 233, 'title' => 'United Arab Emirates', 'code' => 'AE'],
            ['id' => 234, 'title' => 'United Kingdom of Great Britain and Northern Ireland', 'code' => 'GB'],
            ['id' => 235, 'title' => 'United States Minor Outlying Islands', 'code' => 'UM'],
            ['id' => 236, 'title' => 'United States', 'code' => 'US'],
            ['id' => 237, 'title' => 'Uruguay', 'code' => 'UY'],
            ['id' => 238, 'title' => 'Uzbekistan', 'code' => 'UZ'],
            ['id' => 239, 'title' => 'Vanuatu', 'code' => 'VU'],
            ['id' => 240, 'title' => 'Venezuela (Bolivarian Republic of)', 'code' => 'VE'],
            ['id' => 241, 'title' => 'Viet Nam', 'code' => 'VN'],
            ['id' => 242, 'title' => 'Virgin Islands (British)', 'code' => 'VG'],
            ['id' => 243, 'title' => 'Virgin Islands (U.S.)', 'code' => 'VI'],
            ['id' => 244, 'title' => 'Wallis and Futuna', 'code' => 'WF'],
            ['id' => 245, 'title' => 'Western Sahara', 'code' => 'EH'],
            ['id' => 246, 'title' => 'Yemen', 'code' => 'YE'],
            ['id' => 247, 'title' => 'Zambia', 'code' => 'ZM'],
            ['id' => 248, 'title' => 'Zimbabwe', 'code' => 'ZW'],
            ['id' => 249, 'title' => 'Åland Islands', 'code' => 'AX']
        ];

        foreach($items as $item) {
            Country::create($item);
        }
    }


}
