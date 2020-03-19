 const aliases = {
    'zemlya' : '#zemlya1',
    'zemlya-3-mesyaca' : '#zemlya-3-mesyaca2',
    'zemlya-6-mesyacev' : '#zemlya-6-mesyacev3',
    'zemlya-12-mesyacev' : '#zemlya-12-mesyacev4',
    'voda' : '#voda5',
    'voda-3-mesyaca':'#voda-3-mesyaca6',
    'voda-6-mesyacev':'#voda-6-mesyacev7',
    'voda-12-mesyacev':'#voda-12-mesyacev8',
    'ogon':'#ogon9',
    'ogon-3-mesyaca':'#ogon-3-mesyaca10',
    'ogon-6-mesyacev':'#ogon-6-mesyacev11',
    'ogon-12-mesyacev':'#ogon-12-mesyacev12',
    'voda-hd':'#voda-hd13',
    'voda-hd-3-mesyaca':'#voda-hd-3-mesyaca14',
    'voda-hd-6-mesyacev':'#voda-hd-6-mesyacev15',
    'voda-hd-12-mesyacev':'#voda-hd-12-mesyacev16',
    'ogon-hd':'#ogon-hd17',
    'ogon-hd-3-mesyaca':'#ogon-hd-3-mesyaca18',
    'ogon-hd-6-mesyacev':'#ogon-hd-6-mesyacev19',
    'ogon-hd-12-mesyacev':'#ogon-hd-12-mesyacev20',
}


function func(str) {
    let width = $(window).width(); 
    $('#one-tarif > .active').removeClass('active').addClass('hidden');
        if(width >= 576){
            $('.'+str).removeClass('hidden').addClass('active');
            $('.row > .column-2').removeClass('hidden');
            $('.row > .column-3').removeClass('col-sm').addClass('col-lg');
        }
        if(width < 576){
            $('.'+str).removeClass('hidden').addClass('active on-top');
            $('.row > .column-1').addClass('hidden');
            $('.home').on('click',(function(){
                $('.row > .column-1').removeClass('hidden');
                $('.'+str).removeClass('active').addClass('hidden');
            })) 
        }
        $('#choice-tarif > div > .active').removeClass('active').addClass('hidden'); 
    }

function funcOneTarif(str) {
    let width = $(window).width(); 
        if(!str.includes('-hd')){
            cl = str.split('-')[0];
        }else {
            cl = str.split('d-')[0] +'d';
        }      
        $('.choice-'+cl+' > .active').removeClass('active').addClass('hidden');
        $(aliases[str]).removeClass('hidden').addClass('active');
        if(width < 576){
            $('.row > .column-2').addClass('hidden');
            $('.back').on('click',(function(){
                $('.row > .column-2').removeClass('hidden');
                $(aliases[str]).removeClass('active').addClass('hidden');
            }))
        }
        if(width >= 576 && width <= 991){
            $('.row > .column-2').addClass('hidden');
            $('.row > .column-3').removeClass('col-lg').addClass('col-sm');
            $('.back').on('click',(function(){
                $('.row > .column-2').removeClass('hidden');
                $('.row > .column-3').removeClass('col-sm').addClass('col-lg');
                $(aliases[str]).removeClass('active').addClass('hidden');
            }))
        }     
}




