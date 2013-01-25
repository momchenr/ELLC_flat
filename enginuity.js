//----------DHTML Menu Created using AllWebMenus PRO ver 5.1-#776---------------
//C:\clients\Sacunas\Enginuity\web\enginuity.awm
awmRelativeCorner=7;
var awmMenuName='enginuity';
var awmLibraryBuild=882;
var awmLibraryPath='/awmdata';
var awmImagesPath='/awmdata';
var awmSupported=(navigator.appName + navigator.appVersion.substring(0,1)=="Netscape5" || document.all || document.layers || navigator.userAgent.indexOf('Opera')>-1 || navigator.userAgent.indexOf('Konqueror')>-1)?1:0;
if (awmAltUrl!='' && !awmSupported) window.location.replace(awmAltUrl);
if (awmSupported){
var nua=navigator.userAgent,scriptNo=(nua.indexOf('Chrome')>-1)?2:((nua.indexOf('Safari')>-1)?7:(nua.indexOf('Gecko')>-1)?2:((document.layers)?3:((nua.indexOf('Opera')>-1)?4:((nua.indexOf('Mac')>-1)?5:1))));
var mpi=document.location,xt="";
var mpa=mpi.protocol+"//"+mpi.host;
var mpi=mpi.protocol+"//"+mpi.host+mpi.pathname;
if(scriptNo==1){oBC=document.all.tags("BASE");if(oBC && oBC.length) if(oBC[0].href) mpi=oBC[0].href;}
while (mpi.search(/\\/)>-1) mpi=mpi.replace("\\","/");
mpi=mpi.substring(0,mpi.lastIndexOf("/")+1);
var e=document.getElementsByTagName("SCRIPT");
for (var i=0;i<e.length;i++){if (e[i].src){if (e[i].src.indexOf(awmMenuName+".js")!=-1){xt=e[i].src.split("/");if (xt[xt.length-1]==awmMenuName+".js"){xt=e[i].src.substring(0,e[i].src.length-awmMenuName.length-3);if (e[i].src.indexOf("://")!=-1){mpi=xt;}else{if(xt.substring(0,1)=="/")mpi=mpa+xt; else mpi+=xt;}}}}}
while (mpi.search(/\/\.\//)>-1) {mpi=mpi.replace("/./","/");}
var awmMenuPath=mpi.substring(0,mpi.length-1);
while (awmMenuPath.search("'")>-1) {awmMenuPath=awmMenuPath.replace("'","%27");}
document.write("<SCRIPT SRC='"+awmMenuPath+awmLibraryPath+"/awmlib"+scriptNo+".js'><\/SCRIPT>");
var n=null;
awmzindex=1000;
}

var awmImageName='';
var awmPosID='';
var awmSubmenusFrame='';
var awmSubmenusFrameOffset;
var awmOptimize=0;
var awmHash='CYWCKRCWBNKWNOIGVYPQJIZATSEY';
var awmUseTrs=0;
var awmSepr=["0","","",""];
function awmBuildMenu(){
if (awmSupported){
awmCreateCSS(0,1,0,n,n,n,n,n,'none','0','#000000',0,0);
awmCreateCSS(1,2,0,'#FFFFFF','#36353A',n,'bold 13px Arial, Helvetica, sans-serif',n,'none','0','#000000','3px 8px 3px 8',1);
awmCreateCSS(0,2,0,'#FFFFFF','#E01834',n,'bold 13px Arial, Helvetica, sans-serif',n,'none','0','#000000','3px 8px 3px 8',1);
awmCreateCSS(1,2,0,'#FFFFFF','#71BF49',n,'bold 13px Arial, Helvetica, sans-serif',n,'none','0','#000000','3px 8px 3px 8',1);
awmCreateCSS(0,2,0,'#FFFFFF','#36353A',n,'bold 13px Arial, Helvetica, sans-serif',n,'none','0','#000000','3px 8px 3px 8',1);
awmCreateCSS(0,2,0,'#FFFFFF','#71BF49',n,'bold 13px Arial, Helvetica, sans-serif',n,'none','0','#000000','3px 8px 3px 8',1);
awmCreateCSS(1,2,0,'#666666','#FFFFFF',n,'bold 12px Tahoma, Arial, Helvetica, sans-serif',n,'none none solid none','0px 0px 1px 0','#000000 #000000 #666666 #000000','3px 8px 3px 8',1);
awmCreateCSS(0,2,0,'#E31937','#FFFFFF',n,'bold 12px Tahoma, Arial, Helvetica, sans-serif',n,'none none solid none','0px 0px 1px 0','#000000 #000000 #666666 #000000','3px 8px 3px 8',1);
awmCreateCSS(0,2,0,'#666666','#FFFFFF',n,'bold 12px Tahoma, Arial, Helvetica, sans-serif',n,'none none solid none','0px 0px 1px 0','#000000 #000000 #666666 #000000','3px 8px 3px 8',1);
var s0=awmCreateMenu(0,0,0,0,1,0,0,0,7,10,10,0,1,0,0,0,1,n,n,100,1,0,0,0,100,-1,1,200,200,0,0,0,"0,0,0",n,n,n,n,n,n,n,n,0,0,0,0,1);
it=s0.addItem(1,2,2,"services",n,n,"","enginuity-services.htm",n,n,n,"enginuity-services.htm",n,0,0,2,0,0);
var s1=it.addSubmenu(0,0,0,0,0,0,0,0,0,1,0,n,n,100,0,2,0,-1,1,200,200,0,0,"0,0,0",1,"0");
it=s1.addItem(6,7,8,"design/build",n,n,"","enginuity-design-build-services.htm",n,n,n,"enginuity-design-build-services.htm",n,0,0,2,0,0);
it=s1.addItem(6,7,8,"commercial",n,n,"","enginuity-commercial-services.htm",n,n,n,"enginuity-commercial-services.htm",n,0,0,2,0,0);
it=s1.addItem(6,7,8,"industrial",n,n,"","enginuity-industrial-services.htm",n,n,n,"enginuity-industrial-services.htm",n,0,0,2,0,0);
it=s1.addItem(6,7,8,"service/maintenance",n,n,"","enginuity-maintenance-services.htm",n,n,n,"enginuity-maintenance-services.htm",n,0,0,2,0,0);
it=s1.addItem(6,7,8,"energy/sustainable solutions",n,n,"","enginuity-sustainable-energy-services.htm",n,n,n,"enginuity-sustainable-energy-services.htm",n,0,0,2,0,0);
it=s0.addItem(1,2,2,"applied innovation",n,n,"","enginuity-case-studies.htm",n,n,n,"enginuity-case-studies.htm",n,0,0,2,0,0);
var s1=it.addSubmenu(0,0,0,0,0,0,0,0,0,1,0,n,n,100,0,1,0,-1,1,200,200,0,0,"0,0,0",1,"0");
it=s1.addItem(6,7,8,"case study 1",n,n,"","enginuity-case-study1.htm",n,n,n,"enginuity-case-study1.htm",n,0,0,2,0,0);
it=s1.addItem(6,7,8,"case study 2",n,n,"","enginuity-case-study2.htm",n,n,n,"enginuity-case-study2.htm",n,0,0,2,0,0);
it=s1.addItem(6,7,8,"case study 3",n,n,"","enginuity-case-study3.htm",n,n,n,"enginuity-case-study3.htm",n,0,0,2,0,0);
it=s1.addItem(6,7,8,"case study 4",n,n,"","enginuity-case-study4.htm",n,n,n,"enginuity-case-study4.htm",n,0,0,2,0,0);
it=s1.addItem(6,7,8,"case study 5",n,n,"","enginuity-case-study5.htm",n,n,n,"enginuity-case-study5.htm",n,0,0,2,0,0);
it=s1.addItem(6,7,8,"case study 6",n,n,"","enginuity-case-study6.htm",n,n,n,"enginuity-case-study6.htm",n,0,0,2,0,0);
it=s1.addItem(6,7,8,"case study 7",n,n,"","enginuity-case-study7.htm",n,n,n,"enginuity-case-study7.htm",n,0,0,2,0,0);
it=s1.addItem(6,7,8,"testimonials",n,n,"","enginuity-testimonials.htm",n,n,n,"enginuity-testimonials.htm",n,0,0,2,0,0);
it=s0.addItem(1,2,2,"technology",n,n,"","enginuity-technology.htm",n,n,n,"enginuity-technology.htm",n,0,0,2,0,0);
var s1=it.addSubmenu(0,0,0,0,0,0,0,0,0,1,0,n,n,100,0,3,0,-1,1,200,200,0,0,"0,0,0",1,"0");
it=s1.addItem(6,7,8,"turbocor",n,n,"","enginuity-turbocor-technology.htm",n,n,n,"enginuity-turbocor-technology.htm",n,0,0,2,0,0);
it=s0.addItem(1,2,2,"customer support",n,n,"","enginuity-customer-support.htm",n,n,n,"enginuity-customer-support.htm",n,0,0,2,0,0);
var s1=it.addSubmenu(0,0,0,0,0,0,0,0,0,1,0,n,n,100,0,4,0,-1,1,200,200,0,0,"0,0,0",1,"0");
it=s1.addItem(6,7,8,"engineering rule of thumb",n,n,"","engineering-rule-of-thumb.htm",n,n,n,"engineering-rule-of-thumb.htm",n,0,0,2,0,0);
it=s1.addItem(6,7,8,"eHelp desk",n,n,"","eHelp-Desk.htm",n,n,n,"eHelp-Desk.htm",n,0,0,2,0,0);
it=s1.addItem(6,7,8,"maintenance (PMAs)",n,n,"","enginuity-maintenance-pma.htm",n,n,n,"enginuity-maintenance-pma.htm",n,0,0,2,0,0);
it=s0.addItem(1,2,2,"meet enginuity",n,n,"","meet-enginuity.htm",n,n,n,"meet-enginuity.htm",n,0,0,2,0,0);
var s1=it.addSubmenu(0,0,0,0,0,0,0,0,0,1,0,n,n,100,0,5,0,-1,1,200,200,0,0,"0,0,0",1,"0");
it=s1.addItem(6,7,8,"mission",n,n,"","enginuity-mission-vision.htm",n,n,n,"enginuity-mission-vision.htm",n,0,0,2,0,0);
it=s1.addItem(6,7,8,"our team",n,n,"","enginuity-team.htm",n,n,n,"enginuity-team.htm",n,0,0,2,0,0);
it=s1.addItem(6,7,8,"news",n,n,"","eNews.htm",n,n,n,"eNews.htm",n,0,0,2,0,0);
it=s1.addItem(6,7,8,"affiliations",n,n,"","enginuity-affiliations.htm",n,n,n,"enginuity-affiliations.htm",n,0,0,2,0,0);
it=s1.addItem(6,7,8,"community service",n,n,"","enginuity-community-service.htm",n,n,n,"enginuity-community-service.htm",n,0,0,2,0,0);
it=s1.addItem(6,7,8,"careers",n,n,"","enginuity-careers.htm",n,n,n,"enginuity-careers.htm",n,0,0,2,0,0);
it=s0.addItem(1,2,2,"contact us",n,n,"","contact-enginuity.htm",n,n,n,"contact-enginuity.htm",n,0,0,2,0,0);
it=s0.addItem(3,4,5,"enginuity energy",n,n,"","enginuity-energy.htm",n,n,n,"enginuity-energy.htm",n,0,0,2,0,0);
s0.pm.buildMenu();
}}
