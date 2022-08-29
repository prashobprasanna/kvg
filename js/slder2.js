$('.sliderfk').slick({
    arrows: false,//蟾ｦ蜿ｳ縺ｮ遏｢蜊ｰ縺ｯ縺ｪ縺�
    autoplay: true,//閾ｪ蜍慕噪縺ｫ蜍輔″蜃ｺ縺吶°縲ょ�譛溷､縺ｯfalse縲�
    autoplaySpeed: 0,//閾ｪ蜍慕噪縺ｫ蜍輔″蜃ｺ縺吝ｾ�■譎る俣縲ょ�譛溷､縺ｯ3000縺ｧ縺吶′莉雁屓縺ｮ隕九○譁ｹ縺ｧ縺ｯ0
    speed: 6900,//繧ｹ繝ｩ繧､繝峨�繧ｹ繝斐�繝峨ょ�譛溷､縺ｯ300縲�
    infinite: true,//繧ｹ繝ｩ繧､繝峨ｒ繝ｫ繝ｼ繝励＆縺帙ｋ縺九←縺�°縲ょ�譛溷､縺ｯtrue縲�
    pauseOnHover: false,//繧ｪ繝ｳ繝槭え繧ｹ縺ｧ繧ｹ繝ｩ繧､繝峨ｒ荳譎ょ●豁｢縺輔○繧九°縺ｩ縺�°縲ょ�譛溷､縺ｯtrue縲�
    pauseOnFocus: false,//繝輔か繝ｼ繧ｫ繧ｹ縺励◆髫帙↓繧ｹ繝ｩ繧､繝峨ｒ荳譎ょ●豁｢縺輔○繧九°縺ｩ縺�°縲ょ�譛溷､縺ｯtrue縲�
    cssEase: 'linear',//蜍輔″譁ｹ縲ょ�譛溷､縺ｯease縺ｧ縺吶′縲√せ繝�繝ｼ繧ｹ縺ｪ蜍輔″縺ｧ隕九○縺溘＞縺ｮ縺ｧlinear
    slidesToShow: 4,//繧ｹ繝ｩ繧､繝峨ｒ逕ｻ髱｢縺ｫ4譫夊ｦ九○繧�
    slidesToScroll: 1,//1蝗槭�繧ｹ繝ｩ繧､繝峨〒蜍輔°縺呵ｦ∫ｴ�謨ｰ
    responsive: [
        {
        breakpoint: 769,//繝｢繝九ち繝ｼ縺ｮ讓ｪ蟷�′769px莉･荳九�隕九○譁ｹ
        settings: {
            slidesToShow: 2,//繧ｹ繝ｩ繧､繝峨ｒ逕ｻ髱｢縺ｫ2譫夊ｦ九○繧�
        }
    },
    {
        breakpoint: 426,//繝｢繝九ち繝ｼ縺ｮ讓ｪ蟷�′426px莉･荳九�隕九○譁ｹ
        settings: {
            slidesToShow: 1.5,//繧ｹ繝ｩ繧､繝峨ｒ逕ｻ髱｢縺ｫ1.5譫夊ｦ九○繧�
        }
    }
]
});