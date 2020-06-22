
$(document).ready(function(){
    $("#name_error_message").hide();
    $("#phone_error_message").hide();

     error_name=false;
     error_phone=false;

    $(".name").focusout(function(){
        check_Name();
    });
    $(".phone").focusout(function(){
        check_phone();
    });

function check_Name(){
     pattern= /^[a-zA-Z]*$/;
     name=$(".name").val();
    console.log(name);
    if(pattern.test(name)&&name!=''){
        $("#name_error_message").hide();
        $(".name").css("border-bottom","2px solid #05f244");

    }
    else{
        $("#name_error_message").html("<b>should contain only characters</b>");
        $("#name_error_message").show();
        $(".name").css("border-bottom","2px solid #F90A0A");
        error_name=true;
    }
}
function check_phone(){
     pattern= /^[6-9]\d{9}$/;
     phone=$(".phone").val();
    console.log(phone);
    
    if(pattern.test(phone)&&phone!='' &&phone.length==10){
        $("#phone_error_message").hide();
        $(".phone").css("border-bottom","2px solid #05f244");

        
    }
    else{
        $("#phone_error_message").html("<b>Enter valid Mobile Number</b>");
        $("#phone_error_message").show();
        $(".phone").css("border-bottom","2px solid #F90A0A");
        error_phone=true;
    }
    
}

$("#quotation_form").on('submit',function(){
     error_name=false;
     error_phone=false;		

   check_Name();
   
   check_phone();
   Websitetype=$("input[name='Websitetype']:checked").val();
   console.log(Websitetype);
   
   Contentwriting=$("select.Contentwriting").children("option:selected").val();
   console.log(Contentwriting);
    
   HostingServices=$("select.HostingServices").children("option:selected").val();
   console.log(HostingServices);

   WebsiteRequiredin=$("select.WebsiteRequiredin").children("option:selected").val();
   console.log(WebsiteRequiredin);

   LogoDesign=$("select.LogoDesign").children("option:selected").val();
   console.log(LogoDesign);

   WebpageRequired=$("input[name='WebpageRequired']").val();
   console.log(WebpageRequired);

   if(error_name===false && error_phone===false){
    msgbox(Websitetype,Contentwriting,HostingServices,WebsiteRequiredin,LogoDesign,WebpageRequired);
   
       return true;
   }
   else{
       return false;
   }
});

    function msgbox(Websitetype,Contentwriting,HostingServices,WebsiteRequiredin,LogoDesign,WebpageRequired){

        if(Websitetype=='Basic'){
            if((Contentwriting=='not required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired<=7)){
                  a=document.getElementById(pop-up);
                 a.classList.toggle("show");

                }
            
           else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
                  b=document.getElementById(pop-up1);
                 b.classList.toggle("show");
            }
            else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
                 c=document.getElementById(pop-up2);
                c.classList.toggle("show");
            }
            else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
                     d=document.getElementById(pop-up3);
                    d.classList.toggle("show");
            }

             else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
                  e=document.getElementById("pop-up4");
                 e.classList.toggle("show");
             }
            else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
                     f=document.getElementById("pop-up5");
                    f.classList.toggle("show");
            }
            else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
                    g=document.getElementById("pop-up6");
                   g.classList.toggle("show");
            }
            else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
                  h=document.getElementById("pop-up7");
                 h.classList.toggle("show");
            }
            else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
                      i=document.getElementById("pop-up8");
                     i.classList.toggle("show");
            }
            else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
                      j=document.getElementById("pop-up9");
                     j.classList.toggle("show");
            }
            else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
                      k=document.getElementById("pop-up10");
                     k.classList.toggle("show");
            }
            else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
                        l=document.getElementById("pop-up11");
                       l.classList.toggle("show");
            } 
            else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
                     m=document.getElementById("pop-up12");
                    m.classList.toggle("show");
            }
            else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
                   n=document.getElementById("pop-up13");
                   n.classList.toggle("show");
                    //  $(function(){
                    //     alert("Test");
                    //  });
            }
            else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
                    o=document.getElementById("pop-up14");
                    o.classList.toggle("show");
            }
            else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
                    p=document.getElementById("pop-up15");
                    p.classList.toggle("show");
            }
            else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
                    q=document.getElementById("pop-up16");
                    q.classList.toggle("show");
            }
            else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
                 r=document.getElementById("pop-up17");
                    r.classList.toggle("show");
            }
            else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
                    s=document.getElementById("pop-up18");
                    s.classList.toggle("show");
            }
            else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
                     t=document.getElementById("pop-up19");
                       t.classList.toggle("show");
            }
            else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
                        u=document.getElementById("pop-up20");
                        u.classList.toggle("show");
            }
            else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
                      w=document.getElementById("pop-up21");
                     w.classList.toggle("show");
            }
            else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
                       x=document.getElementById("pop-up22");
                      x.classList.toggle("show");
            }
            else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
                        y=document.getElementById("pop-up23");
                       y.classList.toggle("show");
            }
            else {
                       z=document.getElementById("pop-up24");
                      x.classList.toggle("show");
            }
        }
     else if(Websitetype=='Advanced'){
            if((Contentwriting=='not required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired<=7)){
                    a1=document.getElementById("pop-up25");
                   a1.classList.toggle("show");
            }
            
           else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
                      a2=document.getElementById("pop-up26");
                     a2.classList.toggle("show")
            }
            else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
                       a3=document.getElementById("pop-up27");
                      a3.classList.toggle("show");
            }
            else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
                         a4=document.getElementById("pop-up28");
                        a4.classList.toggle("show");
            }
             else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
                      a5=document.getElementById("pop-up29");
                     a5.classList.toggle("show");
            }
            else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
                        a6=document.getElementById("pop-up30");
                       a6.classList.toggle("show");
            }
            else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
                     a7=document.getElementById("pop-up31");
                    a7.classList.toggle("show");
            }
            else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
                      a8=document.getElementById("pop-up32");
                     a8.classList.toggle("show");
            }
            else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
                       a9=document.getElementById("pop-up33");
                      a9.classList.toggle("show");
            }
            else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
                       a10=document.getElementById("pop-up34");
                      a10.classList.toggle("show");
            }
            else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
                       a11=document.getElementById("pop-up35");
                      a11.classList.toggle("show");
            }
            else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
                        a12=document.getElementById("pop-up36");
                       a12.classList.toggle("show");
            }
            else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
                       a13=document.getElementById("pop-up37");
                      a13.classList.toggle("show");
            }
            else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
                       a14=document.getElementById("pop-up38");
                      a14.classList.toggle("show");
            }
            else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
                         a15=document.getElementById("pop-up39");
                        a15.classList.toggle("show");
            }
            else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
                            a16=document.getElementById("pop-up40");
                           a17.classList.toggle("show");
            }
            else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
                           a17=document.getElementById("pop-up41");
                          a17.classList.toggle("show");
            }
            else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
                   a18=document.getElementById("pop-up42");
                          a18.classList.toggle("show");
                
            }
            else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
                   a19=document.getElementById("pop-up43");
                          a19.classList.toggle("show");
                
            }
            else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
                   a20=document.getElementById("pop-up44");
                          a20.classList.toggle("show");
                
            }
            else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
                   a21=document.getElementById("pop-up45");
                          a21.classList.toggle("show");
                
            }
            else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
                   a22=document.getElementById("pop-up46");
                          a22.classList.toggle("show");
            
            }
            else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
                   a23=document.getElementById("pop-up47");
                          a23.classList.toggle("show");
                
            }
            else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
                   a24=document.getElementById("pop-up48");
                          a24.classList.toggle("show");
                
            }
            else {
                           a25=document.getElementById("pop-up49");
                          a25.classList.toggle("show");
                
            }
        }
         else{
            if((Contentwriting=='not required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired<=7)){
                         a26=document.getElementById("pop-up50");
                          a26.classList.toggle("show");
            }
            
           else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
                         a27=document.getElementById("pop-up51");
                          a27.classList.toggle("show");
                
            }
            else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
                           a28=document.getElementById("pop-up52");
                          a28.classList.toggle("show");
            
            }
            else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
                               a29=document.getElementById("pop-up53");
                              a29.classList.toggle("show");
                
            }
             else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
                            a30=document.getElementById("pop-up54");
                           a30.classList.toggle("show");
                
            }
            else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
                                   a31=document.getElementById("pop-up55");
                                   a31.classList.toggle("show");
                
            }
            else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
                           a32=document.getElementById("pop-up56");
                          a32.classList.toggle("show");
                
            }
            else if((Contentwriting=='required')&&(HostingServices=='not required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
                              a33=document.getElementById("pop-up57");
                               a33.classList.toggle("show");
                
            }
            else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
                               a34=document.getElementById("pop-up58");
                              a34.classList.toggle("show");
                
            }
            else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
                            a35=document.getElementById("pop-up59");
                          a35.classList.toggle("show");
                
            }
            else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
                              a36=document.getElementById("pop-up60");
                              a36.classList.toggle("show");
            
            }
            else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
                                  a37=document.getElementById("pop-up61");
                                     a37.classList.toggle("show");
                
            }
            else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
                             a38=document.getElementById("pop-up62");
                            a38.classList.toggle("show");
                
            }
            else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
                            a39=document.getElementById("pop-up63");
                           a39.classList.toggle("show");
                
            }
            else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
                              a40=document.getElementById("pop-up64");
                                a40.classList.toggle("show");
            
            }
            else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
                             a41=document.getElementById("pop-up65");
                               a41.classList.toggle("show");
                
            }
            else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired<7)){
                              a42=document.getElementById("pop-up66");
                               a42.classList.toggle("show");
                
            }
            else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
                             a43=document.getElementById("pop-up67");
                             a43.classList.toggle("show");
                
            }
            else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='not required')&&(WebpageRequired>7)){
                                 a44=document.getElementById("pop-up68");
                                a44.classList.toggle("show");
                
            }
            else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
                                 a45=document.getElementById("pop-up69");
                                  a45.classList.toggle("show");
                
            }
            else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired<7)){
                           a46=document.getElementById("pop-up70");
                          a46.classList.toggle("show");
                
            }
            else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
                           a47=document.getElementById("pop-up71");
                          a47.classList.toggle("show");
                
            }
            else if((Contentwriting=='not required')&&(HostingServices=='required')&&(WebsiteRequiredin=='10-15days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
                               a48=document.getElementById("pop-up72");
                                  a48.classList.toggle("show");
                
            }
            else if((Contentwriting=='required')&&(HostingServices=='required')&&(WebsiteRequiredin=='16-20days')&&(LogoDesign=='required')&&(WebpageRequired>7)){
                               a49=document.getElementById("pop-up73");
                              a49.classList.toggle("show");
                
            }
            else {
                                a50=document.getElementById("pop-up74");
                                 a50.classList.toggle("show");
                
            }
        }
}
        

});