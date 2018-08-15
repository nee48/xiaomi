<?php
date_default_timezone_set("Asia/Jakarta");
// error_reporting(0);

Class Xiaomi {

    public function ua()
    {
        $ua = array('Mozilla/5.0 (Linux; U; Android 8.0.0; id-id; MI 5 Build/OPR1.170623.032) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/534.24 (KHTML, like Gecko) Chrome/61.0.3163.128 Safari/534.24 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; id-id; Redmi 5A Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.0; id-id; Redmi Note 4 Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.0; id-id; Redmi Note 4X Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; id-id; Redmi 4X Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 5.0.2; id-id; Redmi Note 3 Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; id-id; Redmi 5 Plus Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; id-id; Redmi 4A Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; id-id; Redmi 4X Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 6.0; id-id; Redmi Note 4X Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; id-id; MI 5X Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.0; id-id; Redmi Note 4 Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; id-id; Redmi 5A Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; id-id; Redmi Note 5A Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.0; id-id; Redmi Note 4 Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; id-id; Redmi 5 Plus Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 8.0.0; id-id; MI 6 Build/OPR1.170623.027) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 6.0.1; id-id; Redmi Note 3 Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 6.0.1; id-id; Redmi 3S Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/534.24 (KHTML, like Gecko) Chrome/61.0.3163.128 Safari/534.24 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.0; id-id; MI MAX Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 5.0.2; id-id; Redmi Note 2 Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; id-id; Redmi 4X Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 6.0.1; id-id; MI 4LTE Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 8.1.0; id-id; Redmi Note 5 Build/OPM1.171019.011) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 6.0; id-id; Redmi Note 4 Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.1; id-id; Mi Note 3 Build/NMF26X) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 8.0.0; id-id; MIX 2 Build/OPR1.170623.027) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 6.0.1; id-id; MI NOTE LTE Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 4.4.4; id-id; HM NOTE 1S Build/KTU84P) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 6.0.1; id-id; Redmi 4A Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.0; id-id; MI 5 Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 5_1_1 like Mac OS X; en-us) AppleWebKit/534.46 (KHTML, like Gecko) Version/5.1 Mobile/9B206 Safari/7534.48.3 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 6.0.1; id-id; Redmi 3S Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.0; en-us; Redmi Note 4 Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.0; id-id; MI 5s Plus Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 4.4.4; id-id; HM NOTE 1LTE Build/KTU84P) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.0; id-id; MI MAX Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 6.0; id-id; Redmi Note 4 Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.0; en-in; Redmi Note 4 Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 6.0.1; id-id; Redmi 3S Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 6.0.1; id-id; Redmi Note 3 Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; en-in; Redmi 4 Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/534.24 (KHTML, like Gecko) Chrome/61.0.3163.128 Safari/534.24 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 5_1_1 like Mac OS X; en-us) AppleWebKit/534.46 (KHTML, like Gecko) Version/5.1 Mobile/9B206 Safari/7534.48.3 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 5.1.1; id-id; Redmi 3 Build/LMY47V) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 8.1.0; id-id; Redmi Note 5 Build/OPM1.171019.011) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; id-id; Redmi 5 Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 6.0; id-id; Redmi Note 4 Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 6.0.1; id-id; Redmi Note 3 Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; id-id; Redmi 5A Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.1; id-id; MI MAX 2 Build/NMF26F) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.0; id-id; Redmi Note 4 Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; ms-my; Redmi 5 Plus Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 8.1.0; id-id; Redmi Note 5 Build/OPM1.171019.011) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; en-us; Redmi 4X Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; en-us; Redmi 5A Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; id-id; Redmi Note 5 Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 6.0.1; id-id; Redmi Note 3 Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; id-id; Redmi 4A Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.0; id-id; MI MAX Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; id-id; Redmi 5 Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 6.0; id-id; Redmi Note 4X Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; id-id; Redmi 4X Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.1; id-id; MI 6 Build/NMF26X) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.0; id-id; MI 5s Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 6.0.1; id-id; MI 5 Build/MXB48T) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 6.0.1; id-id; MI 3C Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; id-id; Redmi Note 5A Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 4.4.4; id-id; MI 3 Build/KTU84P) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 4.4.4; id-id; HM 1S Build/KTU84P) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; en-in; Redmi Y1 Lite Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.0; es-es; Redmi Note 4 Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; id-id; Redmi 4A Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 6.0.1; id-id; Redmi 4 Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 8.0.0; id-id; MI 5 Build/OPR1.170623.032) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; id-id; Redmi 5 Plus Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; id-id; Redmi 5 Plus Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; id-id; Redmi 5A Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 6.0.1; en-us; Redmi 3S Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 6.0; en-us; Redmi Note 4 Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 6.0.1; id-id; Redmi 4 Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.1; id-id; MI MAX 2 Build/NMF26F) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.1; id-id; MI MAX 2 Build/NMF26F) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 8.0.0; tr-tr; MI 6 Build/OPR1.170623.027) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.1; tr-tr; Mi Note 3 Build/NMF26X) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/534.24 (KHTML, like Gecko) Chrome/61.0.3163.128 Safari/534.24 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 5.0.2; id-id; MI 2S Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.0; en-us; MI MAX Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.0; id-id; MIX Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 8.1.0; id-id; Redmi S2 Build/OPM1.171019.011) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; id-id; Redmi Note 5A Prime Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; tr-tr; Redmi 5 Plus Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; az-az; Redmi 5 Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; id-id; Redmi 4X Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; uk-ua; Redmi 4A Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 8.1.0; uk-ua; Redmi Note 5 Build/OPM1.171019.011) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.1.2; tr-tr; Redmi Note 5A Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 7.0; id-id; Redmi Note 4 Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3',
'Mozilla/5.0 (Linux; U; Android 8.1.0; id-id; Redmi Y2 Build/OPM1.171019.011) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.128 Mobile Safari/537.36 XiaoMi/MiuiBrowser/9.8.3');

    return $ua[array_rand($ua)];
    }

	public function sendC($url, $page, $params) {

        $ch = curl_init(); 
        curl_setopt ($ch, CURLOPT_URL, $url.$page); 
        curl_setopt ($ch, CURLOPT_USERAGENT, $this->ua()); 
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 

        if(!empty($params)) {
        curl_setopt ($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt ($ch, CURLOPT_POST, 1); 
        }

        curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt ($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
        curl_setopt ($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
        curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);

        $headers  = array();
        $headers[] = "Host: activity.browser.intl.miui.com";
        $headers[] = "Origin: https://activity.browser.intl.miui.com";
        $headers[] = "Referer: https://activity.browser.intl.miui.com/asiad/asian-games";
        $headers[] = "User-Agent: ".$this->ua();
    	$headers[] = "Content-Type: application/json;charset=UTF-8";
        $headers[] = "Accept: application/json";
        $headers[] = "Accept-Language: id-ID,en-US;q=0.8";


        curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);    
        //curl_setopt ($ch, CURLOPT_HEADER, 1);
        $result = curl_exec ($ch);
        curl_close($ch);
        return $result;

    }


    private function getStr($start, $end, $string) {
        if (!empty($string)) {
        $setring = explode($start,$string);
        $setring = explode($end,$setring[1]);
        return $setring[0];
        }
    }

    public function chance($aid,$uid)
    {
        $url = "https://activity.browser.intl.miui.com/asiad/task/fin?";
        // $task = array('6','7','8','9','10');
        $data = '{"uid":"'.$uid.'","aid":'.$aid.',"region":"id","taskId":'.rand(1,10).'}';
        $send = $this->sendC($url, null, $data);
        // echo $send;
        $json = json_decode($send);
        if ($json->data == true) {
            echo date("h:i:s")." | Berhasil Add Chance \n";
        }else{
            echo date("h:i:s")." | Gagal Add Chance / Limit Add Chance \n";
        }

    }

    public function spin($aid,$uid)
    {
        $url = "https://activity.browser.intl.miui.com/asiad/lottery";
        $data = '?aid='.$aid.'&region=id&uid='.$uid.'';
        $send = $this->sendC($url, $data, null);
        $json = json_decode($send);
        if ($json->data->result == false) {
            $result = "false";
            $dapet = "";
        }else{
            $result = "true";
            $dapet = "|| DAPET AJG";
        }

        if ($json->data->prize == null) {
            $prize = "Zonk";
        }else{
            $prize = $json->data->prize;
            $file = fopen('xiaomi.txt','a+');
                fwrite($file,$prize . PHP_EOL);
                fclose($file);
        }
        echo date("h:i:s")." | Result : $result Prize : $prize $dapet \n";

    }

    
}

$init = new Xiaomi();
echo "Suntik Chance & Auto Spin Asian Games Xiaomi \n\n";
echo 'uid : ';
$uid = trim(fgets(STDIN));
echo 'aid : ';
$aid = trim(fgets(STDIN));

echo "Pilih Mode : \n";
echo "1. Suntik Chance \n";
echo "2. Auto Spin \n";
$mode = trim(fgets(STDIN));

if ($mode == 1) {
    echo "Masukan Jumlah : ";
    $loop = trim(fgets(STDIN));
    for ($i=0; $i < $loop; $i++) { 
        $init->chance($aid,$uid);
    }
}elseif ($mode == 2) {
    echo "Masukan Jumlah : ";
    $loop = trim(fgets(STDIN));
    for ($i=0; $i < $loop; $i++) { 
        $init->spin($aid,$uid);
    }
}else{
    echo "Masukin Yang Bener Goblok";
}
