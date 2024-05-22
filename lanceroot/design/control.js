var heading_list = [];
var $top_loop = "";
var chare_map = [];
const CHARE_DEEP = 6;
const FORCUS_OFFSET = -70;
const ENABLE_TRANSLATE = false;
function removeHTags(dirty) {
    let res = dirty;
    let bindex = res.indexOf("<");
    let eindex = res.indexOf(">");
    while(bindex >=0 && eindex>=0) {
        res = res.replace(res.substring(bindex, eindex+1), "");
        bindex = res.indexOf("<");
        eindex = res.indexOf(">");
    }
    return res;
}

if(heading_list.length<=0) {
    $(".ul_heading").empty();
    $(".single-cate").each(function(i,obj){
        heading_list.push($(this).html());
        let dataId = i+1;
        $(".ul_heading").append('<li class="left_title" data-id="' + dataId +'" data-chare="1">' + $(this).html() + '</li>');
        $(this).parent().attr('data-id', dataId);
    });
}
if(chare_map.length<=0) {
    $(".ul_heading li").each(function(i,obj){
        each_chare = Array(CHARE_DEEP).fill(-1);
        let this_chare = $(this).attr('data-chare');
        this_chare = parseInt(this_chare, 10);
        for(let this_itr = 0;this_itr<this_chare-1;this_itr++) {
            for(let j=i-1;j>=0;j--) {
                if(chare_map[j][this_itr] >= 0) {
                    each_chare[this_itr] = chare_map[j][this_itr];
                    break;
                }
            }
        }
        each_chare[this_chare-1] = i;
        chare_map.push(each_chare);
        let chare_html = "";
        for(let j=0;j<CHARE_DEEP;j++) {
            if(each_chare[j]>=0 && each_chare[j] != i) {
                let heading_id = each_chare[j]+1;
                chare_html = chare_html + '<span class="chare_name" data-id="' + heading_id + '">'+heading_list[each_chare[j]]+'</span><span calss="chare_sep">&nbsp;/&nbsp;</span>';
            }
        }
        if(chare_html != "") {
            let this_heading_id = i+1;
            $('div.single-area[data-id="'+this_heading_id+'"]').before(chare_html);
        }
    });
    for(let i=chare_map.length-1; i>=0;i--) {
        for(let j=0;j<CHARE_DEEP-1; j++) {
            if(chare_map[i][j+1] >= 0) {
                let enable_id = chare_map[i][j] + 1;
                $(".ul_heading li[data-id="+enable_id+"]").addClass("chare_opened").attr('data-subhas', "true");
            }
        }
    }
}
$(document).keydown(function (e) {
    if (e.keyCode == 20) {
        $('html, body').animate({
            scrollTop: '+=30'
        }, 50);
    }
})
$(document).ready(function() {
    $(".ul_heading li, .chare_name, .ur_heading li").click(function(){
        var heading_id = $(this).attr('data-id');
        $('html, body').animate({
            scrollTop: $('.single-area[data-id="'+heading_id+'"]').offset().top + FORCUS_OFFSET
        }, 100);
        mark_text($('div.single-area[data-id="'+heading_id+'"]'))
    });
    $(".ul_heading li").dblclick(function(){
        $(this).addClass("chare_opened");
        let heading_id = parseInt($(this).attr('data-id'), 10);
        let chare_no = parseInt($(this).attr('data-chare'), 10);

        $('html, body').animate({
            scrollTop: $('.single-area[data-id="'+heading_id+'"]').offset().top + FORCUS_OFFSET
        }, 100);
        mark_text($('.single-area[data-id="'+heading_id+'"]'))

        if(heading_id >= chare_map.length) return;
        if(chare_no >= CHARE_DEEP) return;
        for(let i=heading_id-1;i<chare_map.length;i++) {
            let enable_id = i+1;
            if(chare_map[i][chare_no-1] == heading_id-1) {
                if(chare_no < CHARE_DEEP) {
                    if(chare_map[i][chare_no] >= 0) {
                        if(chare_no+1 < CHARE_DEEP) {
                            if(chare_map[i][chare_no+1] < 0) {
                                $('.ul_heading li[data-id="' + enable_id + '"]').css({display: 'block'});
                            }
                        }
                        else {
                            $('.ul_heading li[data-id="' + enable_id + '"]').css({display: 'block'});
                        }
                    }
                }
            }
            else break;
        }

    }); 
    function updateLeft() {
        $('.left_title[data-subhas="true"]').removeClass("chare_opened");
        let key_list = [];
        $('.opt_word[data-checked=true]').each(function() {
            key_list.push($(this).html().toLowerCase());
        });
        let num_list = [];
        for(let no = 0;no<heading_list.length;no++) {
            //self match
            let matched = true;
            for(let i=0;i<key_list.length;i++) {
                if(!heading_list[no].includes(key_list[i])) {
                    matched = false;
                }
            }
            if(matched) {
                if(num_list.indexOf(no) == -1) num_list.push(no);
                for(let uni = 0;uni<CHARE_DEEP;uni++) {
                    if(chare_map[no][uni]>=0) {
                        if(num_list.indexOf(chare_map[no][uni]) == -1) num_list.push(chare_map[no][uni]);
                    }
                }
            }
            else {
                if(chare_map[no][1] >= 0) {
                    //chare match
                    let matched = true;
                    let uni_title = ""
                    for(let uni = 0;uni<CHARE_DEEP;uni++) {
                        if(chare_map[no][uni]>=0) uni_title = uni_title + " " + heading_list[chare_map[no][uni]];
                    }
                    for(let i=0;i<key_list.length;i++) {
                        if(!uni_title.includes(key_list[i])){
                            matched = false;
                        }
                    }
                    if(matched) {
                        if(num_list.indexOf(no) == -1) num_list.push(no);
                        for(let uni = 0;uni<CHARE_DEEP;uni++) {
                            if(chare_map[no][uni]>=0) {
                                if(num_list.indexOf(chare_map[no][uni]) == -1) num_list.push(chare_map[no][uni]);
                            }
                        }
                    }
                }
            }
        }
        for(let no = 0;no<heading_list.length;no++) {
            let sel_no = no+1;
            if(num_list.includes(no)) {
                $('.ul_heading li[data-id="' + sel_no + '"]').show()
            }
            else {
                $('.ul_heading li[data-id="' + sel_no + '"]').hide()
            }
        }
    }
    function clearSearch() {
        $("#top_input").val('');
        $('.opt_word').html('').attr('data-checked','false');
        $top_loop = "";
        $('div.single-area').css({'background-color':'white'});
        $('.top_result').html('/');
        $('.ul_heading li, .ur_heading li').show();
        $('.left_title[data-subhas="true"]').addClass("chare_opened");
        switchHeading(true)
        $(".ul_heading").scrollTop(0);
    }
    $('.opt_word').dblclick(function(){
        clearSearch();
    });
    $('.opt_word').click(function(){
        if($(this).html() == "") return;
        let checked = $(this).attr('data-checked');
        if(checked == "true") checked = "false"
        else checked = "true"
        $(this).attr('data-checked', checked);
        updateLeft();
    }); 
    function switchHeading(bShowLeft) {
        if(bShowLeft) {
            $('.switch_heading').removeClass("switched");
            $('.switch_heading').html("<")
            $(".ul_heading").show()
            $(".ur_heading").hide()
        }
        else {
            $('.switch_heading').addClass("switched")
            $('.switch_heading').html(">")
            $(".ul_heading").hide()
            $(".ur_heading").show()
        }
    }
    $('.switch_heading').click(function(){
        if($(this).hasClass("switched")) {
            switchHeading(true)
        }
        else {
            switchHeading(false)
        }
    }); 
    function mark_text(jqObj) {
        if(jqObj == null) return;
        if(jqObj.length <= 0) return;
        jqObj.unmark();
        /****************************** */
        var regex, matches,
        // Read the keyword
        keyword = $('#top_input').val(),
        // test for regex (e.g. "/(lorem|ipsum)/gi")
        testRegex = /^\/((?:\\\/|[^\/])+)\/([mig]{0,3})?$/;
        if (testRegex.test(keyword)) {
            matches = testRegex.exec(keyword);
            try {
                regex = new RegExp(matches[1], matches[2]);
            } catch (err) {
                regex = null;
            }
        }

        var options = {};
        if (regex instanceof RegExp) {
            jqObj.markRegExp(regex, options);
        } else {
            jqObj.mark(keyword, options);
        }
        /**************************************** */
    }
    $('#top_input').keyup(function (e) {
        if (e.keyCode == 13) {
            let loopval = removeHTags($('.top_result').html());
            loopval = loopval.split("/");
            if(loopval.length>=2 && $top_loop.length>0) {
                let jumpno = parseInt(loopval[0], 10);
                let total =  parseInt(loopval[1], 10);
                if(jumpno >= total) jumpno = 0
                loopval = (jumpno+1).toString()  + "/" + total.toString();
                $('.top_result').html(loopval);
                if($top_loop.length > jumpno) {
                    if(ENABLE_TRANSLATE) {
                        recheckMarked(jumpno);
                    } else {
                        $('html, body').animate({
                            scrollTop: $top_loop.eq(jumpno).offset().top + FORCUS_OFFSET
                        }, 100);
                        mark_text($top_loop.eq(jumpno));
                    }
                }
                
            }
        }
    });
    $('#top_input, #second_input, ul, li').on( "contextmenu", function(e) {
        e.preventDefault()
    });
    $('#second_input').mousedown(function(e){ 
        if( e.button == 0 || e.button == 2 ) { 
            let temp = $('#top_input').val();
            $('#top_input').val($('#second_input').val());
            $('#second_input').val(temp);
            if($('#top_input').val()) {
                top_input_typing()
            }
            return false; 
        } 
        return true; 
    }); 
    $('#top_input').mousedown(function(e){ 
        if( e.button == 2 ) { 
            if($('#top_input').val()) {
                $('#second_input').val($('#top_input').val())
            }
            clearSearch();
            return false; 
        } 
        return true; 
    }); 
    $('#top_input').dblclick(function(e){
    });
    function top_input_typing() {
        $('div.single-area').css({'background-color':'white'});
        $('.top_result').html('/');
        let key = $("#top_input").val();
        key = key.toLowerCase();
        let key_split = key.split(" ");
        let key_list = [];
        key_split.forEach(each_key => {
            if(each_key.length >= 2) {
                if(!key_list.includes(each_key)){
                    key_list.push(each_key);
                }
            }
        });
        if(key_list.length<=0) return;

        $('.opt_word').each(function(i, obj) {
            if(i<key_list.length) {
                $(this).html(key_list[i]);
                $(this).attr('data-checked', 'true');
            }
            else {
                $(this).html('');
                $(this).attr('data-checked', 'false');
            }
        });

        updateLeft();
        
        let jqtext = 'div.single-area:contains("';
        for(let no=0;no<key_list.length-1;no++) {
            jqtext = jqtext + key_list[no] + '"):contains("';
        }
        jqtext = jqtext + key_list[key_list.length-1] + '")';
        $top_loop = $(jqtext);
        if($top_loop.length <= 0) return;


        $(".ur_heading li").hide()
        $.each($top_loop, function(key, content) { 
            let right_id =  $(this).attr('data-id');
            $('.ur_heading li[data-id="' + right_id + '"]').show()
        });
        $top_loop.css({'background-color':'#F0FFFE '});
        $('.top_result').html('1/' + $top_loop.length);
        var heading_id = $top_loop.first().attr('data-id');
        $('html, body').animate({
            scrollTop: $('.single-area[data-id="'+heading_id+'"]').offset().top + FORCUS_OFFSET
        }, 100);
        mark_text($('div.single-area[data-id="'+heading_id+'"]'));
    }
    function recheckMarked(jumpno = 0) {
        $('div.single-area').css({'background-color':'white'});
        $('.top_result').html('/');
        let key = $("#top_input").val();
        key = key.toLowerCase();
        let key_split = key.split(" ");
        let key_list = [];
        key_split.forEach(each_key => {
            if(each_key.length >= 2) {
                if(!key_list.includes(each_key)){
                    key_list.push(each_key);
                }
            }
        });
        if(key_list.length<=0) return;
        let jqtext = 'div.single-area:contains("';
        for(let no=0;no<key_list.length-1;no++) {
            jqtext = jqtext + key_list[no] + '"):contains("';
        }
        jqtext = jqtext + key_list[key_list.length-1] + '")';
        $top_loop = $(jqtext);
        if($top_loop.length <= 0) return;

        $top_loop.css({'background-color':'#F0FFFE '});
        let loopval = jumpno + 1;
        $('.top_result').html(loopval + '/' + $top_loop.length);
        $('html, body').animate({
            scrollTop: $top_loop.eq(jumpno).offset().top + FORCUS_OFFSET
        }, 100);
        mark_text($top_loop.eq(jumpno));
    }
    var top_input_processing = false;
    var SENSE_RPOCESS = 500;
    $('#top_input').on('input',function(e){
        if(top_input_processing) return;
        top_input_processing = true;
        setTimeout(() => {
            top_input_typing();
            top_input_processing = false;
        }, SENSE_RPOCESS);
    });
});

$.expr[":"].contains = $.expr.createPseudo(function(arg) {
    return function( elem ) {
        return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
    };
});