<?php

namespace Leonardcodep\Adsbygoogle;

class AdsbygoogleBuilder
{
    public function show($name)
    {
        return view('adsbygoogle::adsbygoogle')->with([
            'ad_client'                 => config("adsbygoogle.client_id"),
            'ad_style'                  => config("adsbygoogle.ads.$name.ad_style", "display:block;"),
            'ad_slot'                   => config("adsbygoogle.ads.$name.ad_slot", null),
            'ad_format'                 => config("adsbygoogle.ads.$name.ad_format", null),
            'ad_layout'                 => config("adsbygoogle.ads.$name.ad_layout", null),
            'ad_full_width_responsive'  => config("adsbygoogle.ads.$name.ad_full_width_responsive", null)
        ]);
    }
}
