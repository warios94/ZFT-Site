
(function(compId){var _=null,y=true,n=false,zy='scaleY',e13='${omino_bianco}',x9='rgba(255,255,255,0.00)',x2='5.0.0',x4='rgba(0,0,0,0)',e10='${Stage}',e11='${RoundRect4}',g='image',bg='background-color',x6='rgba(43,182,115,0.56)',zx='scaleX',e12='${omino}',m='rect',o='opacity',x1='6.0.0',x3='6.0.0.400',i='none';var g7='omino.svg',g5='contorno.svg',g8='omino%20bianco.svg';var im='images/',aud='media/',vid='media/',js='js/',fonts={},opts={'gAudioPreloadPreference':'auto','gVideoPreloadPreference':'auto'},resources=[],scripts=[],symbols={"stage":{v:x1,mv:x2,b:x3,stf:i,cg:i,rI:n,cn:{dom:[{id:'contorno',t:g,r:['-15px','-145px','612px','792px','auto','auto'],o:'1',f:[x4,im+g5,'0px','0px']},{id:'RoundRect4',t:m,r:['98px','40px','361px','330px','auto','auto'],br:["100% 100%","100%","100% 100%","100% 100%"],o:'1',f:[x6],s:[0,"rgb(0, 0, 0)",i],tf:[[],[],[],['0','0']]},{id:'omino',t:g,r:['-149px','-109px','880px','632px','auto','auto'],o:'0.98449612403101',f:[x4,im+g7,'0px','0px'],filter:[0,0,1,1,0,0,0,0,"rgba(0,0,0,0)",0,0,0]},{id:'omino_bianco',t:g,r:['-73px','-108px','727px','629px','auto','auto'],o:'0',f:[x4,im+g8,'0px','0px']}],style:{'${Stage}':{isStage:true,r:['null','null','550px','400px','auto','auto'],zr:['0px','','',''],overflow:'hidden',f:[x9]}}},tt:{d:1090,a:y,data:[["eid56","background-image",0,0,"easeInQuart",e10,[270,[['rgba(255,255,255,0)',0],['rgba(255,255,255,0)',100]]],[270,[['rgba(255,255,255,0)',0],['rgba(255,255,255,0)',100]]]],["eid57",bg,0,0,"easeInQuart",e10,'rgba(255,255,255,0.00)','rgba(255,255,255,0.00)'],["eid15",zy,90,1000,"easeInQuart",e11,'0','1'],["eid20",o,590,440,"easeInQuart",e12,'1','0'],["eid18",o,590,440,"easeInQuart",e13,'0','1'],["eid14",zx,90,1000,"easeInQuart",e11,'0','1'],["eid16",bg,935,0,"easeInQuart",e11,'rgba(43,182,115,0.56)','rgba(43,182,115,0.56)']]}}};AdobeEdge.registerCompositionDefn(compId,symbols,fonts,scripts,resources,opts);})("EDGE-168615556");
(function($,Edge,compId){var Composition=Edge.Composition,Symbol=Edge.Symbol;Edge.registerEventBinding(compId,function($){
//Edge symbol: 'stage'
(function(symbolName){Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",0,function(sym,e){sym.stop();});
//Edge binding end
Symbol.bindElementAction(compId,symbolName,"${Stage}","mouseover",function(sym,e){sym.play();});
//Edge binding end
Symbol.bindElementAction(compId,symbolName,"${Stage}","mouseout",function(sym,e){sym.playReverse();});
//Edge binding end
Symbol.bindElementAction(compId,symbolName,"${Stage}","click",function(sym,e){window.open("client.php","_blank");});
//Edge binding end
})("stage");
//Edge symbol end:'stage'
})})(AdobeEdge.$,AdobeEdge,"EDGE-168615556");
