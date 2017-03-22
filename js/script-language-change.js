//declare
function changeLang(lang){
    $('.loading-screen').slideDown('slow');
    for(i=0; i<languagesVar.length; i++){
        for (j=0; j<languagesVar[i].length; j++){
            if(languagesVar[i][j].FKLanguageID==lang){
                $('.tran-'+i).html(languagesVar[i][j].Translation);
                language=languagesVar[i][j].Languagename;
            }
        }
    }
    for(j=0; j<pageHeadings.length; j++){
        if(pageHeadings[j].FkLanguageid==lang){
            for(i=1; i<=4; i++){
                $('.tran-Page'+i+'heading').html(pageHeadings[j]['Page'+i+'heading']);
                
            }
            if(typeof pageHeadings[j].Links === 'string'){
                pageHeadings[j].Links=JSON.parse(pageHeadings[j].Links);
            }
            
            $('.tLink').remove();
            
            for(index in pageHeadings[j].Links){
                htmlLinks='';
                htmlLinks=htmlLinks+'<li class="tLink">&nbsp;&nbsp;&nbsp;</li>';
                htmlLinks=htmlLinks+'<li class="tLink"><a href="'+pageHeadings[j].Links[index]+'">'+index+'</a></li>';
                $('.tran-links').append(htmlLinks);
            }
        }
    }
    getCustomerSettings(function(){
        $('.rr_selector').html(function(){
            selHtml='<option value="0"> Pick a return reason &darr;</option>';
            for(a=0; a<customerSettings.returnReason.length; a++){
                selHtml=selHtml+'<option value="'+customerSettings.returnReason[a]['PKReasonID']+'">'+customerSettings.returnReason[a]['Reason']+'</option>'
            }
            return selHtml;
            
        });
    });
    $('.tranLangLink').each(function(){
        if($(this).text()==language){
            $(this).addClass('hover_bg');
        }
        else{
            $(this).removeClass('hover_bg');
        }
    });
    $('.loading-screen').slideUp('slow');
    
}
//execute
$(document).ready(function(){
    //change(2);
    console.log('PAGE HEADINGS');
    console.log(pageHeadings);
    /*
    console.log('LANGS');
    console.log(languagesVar);
    console.log('CURRENT LANG');
    console.log(language);
    */
});
