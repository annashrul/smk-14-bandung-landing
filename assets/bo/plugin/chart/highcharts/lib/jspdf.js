/*

 jsPDF - PDF Document creation from JavaScript
 Version ${versionID}
                           CommitID ${commitID}

 Copyright (c) 2010-2014 James Hall <james@parall.ax>, https://github.com/MrRio/jsPDF
               2010 Aaron Spike, https://github.com/acspike
               2012 Willow Systems Corporation, willow-systems.com
               2012 Pablo Hess, https://github.com/pablohess
               2012 Florian Jenett, https://github.com/fjenett
               2013 Warren Weckesser, https://github.com/warrenweckesser
               2013 Youssef Beddad, https://github.com/lifof
               2013 Lee Driscoll, https://github.com/lsdriscoll
               2013 Stefan Slonevskiy, https://github.com/stefslon
               2013 Jeremy Morel, https://github.com/jmorel
               2013 Christoph Hartmann, https://github.com/chris-rock
               2014 Juan Pablo Gaviria, https://github.com/juanpgaviria
               2014 James Makes, https://github.com/dollaruw
               2014 Diego Casorran, https://github.com/diegocr
               2014 Steven Spungin, https://github.com/Flamenco
               2014 Kenneth Glassey, https://github.com/Gavvers

 Permission is hereby granted, free of charge, to any person obtaining
 a copy of this software and associated documentation files (the
 "Software"), to deal in the Software without restriction, including
 without limitation the rights to use, copy, modify, merge, publish,
 distribute, sublicense, and/or sell copies of the Software, and to
 permit persons to whom the Software is furnished to do so, subject to
 the following conditions:

 The above copyright notice and this permission notice shall be
 included in all copies or substantial portions of the Software.

 THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

 Contributor(s):
    siefkenj, ahwolf, rickygu, Midnith, saintclair, eaparango,
    kim3er, mfo, alnorth, Flamenco
*/
var jsPDF=function(t){function Pa(q){var A={};this.subscribe=function(F,q,w){if("function"!==typeof q)return!1;A.hasOwnProperty(F)||(A[F]={});var t=Math.random().toString(35);A[F][t]=[q,!!w];return t};this.unsubscribe=function(q){for(var t in A)if(A[t][q])return delete A[t][q],!0;return!1};this.publish=function(F){if(A.hasOwnProperty(F)){var Z=Array.prototype.slice.call(arguments,1),w=[],S;for(S in A[F]){var aa=A[F][S];try{aa[0].apply(q,Z)}catch(ca){t.console&&console.error("jsPDF PubSub Error",ca.message,
ca)}aa[1]&&w.push(S)}w.length&&w.forEach(this.unsubscribe)}}}function q(V,A,F,Z){var w={};"object"===typeof V&&(w=V,V=w.orientation,A=w.unit||A,F=w.format||F,Z=w.compress||w.compressPdf||Z);A=A||"mm";F=F||"a4";V=(""+(V||"P")).toLowerCase();(""+F).toLowerCase();var S=!!Z&&"function"===typeof Uint8Array,aa=w.textColor||"0 g",ca=w.drawColor||"0 G",L=w.fontSize||16,oa=w.lineHeight||1.15,Qa=w.lineWidth||.200025,C=2,da=!1,N=[],r={},G={},D,Fa=[],u={},pa={},H={},qa={},Ga=null,E,z=0,I,m=[],J=[],B=[],ra=[],
W=[],sa=0,ta=0,P=0,M={},ea={},fa=[],ga,ha,ia,X,Q,ua,O,ja,T={title:"",subject:"",author:"",keywords:"",creator:""},f={},v=new Pa(f),h=function(a){return a.toFixed(2)},k=function(a){return a.toFixed(3)},U=function(a){return("0"+parseInt(a)).slice(-2)},va=function(a){a="00"+a;return a.substr(a.length-2)},c=function(a){da?m[I].push(a):(P+=a.length+1,ra.push(a))},K=function(){C++;N[C]=P;c(C+" 0 obj");return C},ba=function(a){c("stream");c(a);c("endstream")},Ha=function(){c("/ProcSet [/PDF /Text /ImageB /ImageC /ImageI]");
c("/Font <<");for(var a in r)r.hasOwnProperty(a)&&c("/"+a+" "+r[a].objectNumber+" 0 R");c(">>");c("/Shading <<");for(var b in u)u.hasOwnProperty(b)&&u[b]instanceof f.ShadingPattern&&0<=u[b].objectNumber&&c("/"+b+" "+u[b].objectNumber+" 0 R");v.publish("putShadingPatternDict");c(">>");c("/Pattern <<");for(var g in u)u.hasOwnProperty(g)&&u[g]instanceof f.TilingPattern&&0<=u[g].objectNumber&&c("/"+g+" "+u[g].objectNumber+" 0 R");v.publish("putTilingPatternDict");c(">>");c("/ExtGState <<");for(var d in H)H.hasOwnProperty(d)&&
0<=H[d].objectNumber&&c("/"+d+" "+H[d].objectNumber+" 0 R");v.publish("putGStateDict");c(">>");c("/XObject <<");for(var e in M)M.hasOwnProperty(e)&&0<=M[e].objectNumber&&c("/"+e+" "+M[e].objectNumber+" 0 R");v.publish("putXobjectDict");c(">>")},Ia=function(a,b,g,c){var e="F"+(Object.keys(r).length+1).toString(10);a=r[e]={id:e,PostScriptName:a,fontName:b,fontStyle:g,encoding:c,metadata:{}};G.hasOwnProperty(b)||(G[b]={});G[b][g]=e;v.publish("addFont",a);return e},wa=function(a,b){return new R(a.a*b.a+
a.b*b.c,a.a*b.b+a.b*b.d,a.c*b.a+a.d*b.c,a.c*b.b+a.d*b.d,a.e*b.a+a.f*b.c+b.e,a.e*b.b+a.f*b.d+b.f)},R=function(a,b,g,c,e,l){this.a=a;this.b=b;this.c=g;this.d=c;this.e=e;this.f=l};R.prototype={toString:function(){return[k(this.a),k(this.b),k(this.c),k(this.d),k(this.e),k(this.f)].join(" ")}};var ka=new R(1,0,0,1,0,0),la=function(){this.page=z;this.currentPage=I;this.pages=m.slice(0);this.pagedim=B.slice(0);this.pagesContext=J.slice(0);this.x=ga;this.y=ha;this.matrix=ia;this.width=X;this.height=Q;this.id=
"";this.objectNumber=-1};la.prototype={restore:function(){z=this.page;I=this.currentPage;J=this.pagesContext;B=this.pagedim;m=this.pages;ga=this.x;ha=this.y;ia=this.matrix;X=this.width;Q=this.height}};var xa=function(a,b){if(!pa[a]){var g=(b instanceof f.ShadingPattern?"Sh":"P")+(Object.keys(u).length+1).toString(10);b.id=g;pa[a]=g;u[g]=b;v.publish("addPattern",b)}},Ja=function(a,b){if(!a||!qa[a]){var g=!1,c;for(c in H)if(H.hasOwnProperty(c)&&H[c].equals(b)){g=!0;break}g?b=H[c]:(g="GS"+(Object.keys(H).length+
1).toString(10),H[g]=b,b.id=g);a&&(qa[a]=b.id);v.publish("addGState",b);return b}},ya=function(a,b){var g,c,e,l,f,h;b=b||{};g=b.sourceEncoding||"Unicode";e=b.outputEncoding;if((b.autoencode||e)&&r[D].metadata&&r[D].metadata[g]&&r[D].metadata[g].encoding&&(g=r[D].metadata[g].encoding,!e&&r[D].encoding&&(e=r[D].encoding),!e&&g.codePages&&(e=g.codePages[0]),"string"===typeof e&&(e=g[e]),e)){f=!1;l=[];g=0;for(c=a.length;g<c;g++)(h=e[a.charCodeAt(g)])?l.push(String.fromCharCode(h)):l.push(a[g]),l[g].charCodeAt(0)>>
8&&(f=!0);a=l.join("")}for(g=a.length;void 0===f&&0!==g;)a.charCodeAt(g-1)>>8&&(f=!0),g--;if(f){l=b.noBOM?[]:[254,255];g=0;for(c=a.length;g<c;g++){h=a.charCodeAt(g);f=h>>8;if(f>>8)throw Error("Character at position "+g+" of string '"+a+"' exceeds 16bits. Cannot be encoded into UCS-2 BE");l.push(f);l.push(h-(f<<8))}a=String.fromCharCode.apply(void 0,l)}return a.replace(/\\/g,"\\\\").replace(/\(/g,"\\(").replace(/\)/g,"\\)")},Aa=function(a,b){"string"===typeof b&&b.toLowerCase();if("string"===typeof a){var c=
a.toLowerCase();za.hasOwnProperty(c)&&(a=za[c][0]/E,b=za[c][1]/E)}Array.isArray(a)&&(b=a[1],a=a[0]);da=!0;m[++z]=[];B[z]={width:Number(a)||X,height:Number(b)||Q};J[z]={};Ka(z)},La=function(){Aa.apply(this,arguments);c(h(Qa)+" w");c(ca);0!==sa&&c(sa+" J");0!==ta&&c(ta+" j");v.publish("addPage",{pageNumber:z})},Ra=function(a){0<a&&a<=z&&(m.splice(a,1),B.splice(a,1),z--,I>z&&(I=z),this.setPage(I))},Ka=function(a){0<a&&a<=z&&(I=a,X=B[a].width,Q=B[a].height)},Ba=function(a,b){var c;a=void 0!==a?a:r[D].fontName;
b=void 0!==b?b:r[D].fontStyle;void 0!==a&&(a=a.toLowerCase());switch(a){case "sans-serif":case "verdana":case "arial":case "helvetica":a="helvetica";break;case "fixed":case "monospace":case "terminal":case "courier":a="courier";break;default:a="times"}try{c=G[a][b]}catch(d){}c||(c=G.times[b],null==c&&(c=G.times.normal));return c},Da=function(){da=!1;C=2;ra=[];N=[];W=[];c("%PDF-1.3");var a,b,g,d,e;e=t.adler32cs||q.adler32cs;S&&"undefined"===typeof e&&(S=!1);for(a=1;a<=z;a++){K();g=(X=B[a].width)*E;
b=(Q=B[a].height)*E;c("<</Type /Page");c("/Parent 1 0 R");c("/Resources 2 0 R");c("/MediaBox [0 0 "+h(g)+" "+h(b)+"]");v.publish("putPage",{pageNumber:a,page:m[a]});c("/Contents "+(C+1)+" 0 R");c(">>");c("endobj");b=m[a].join("\n");b=(new R(E,0,0,-E,0,Q)).toString()+" cm\n"+b;K();if(S){g=[];for(d=b.length;d--;)g[d]=b.charCodeAt(d);d=e.from(b);b=new Deflater(6);b.append(new Uint8Array(g));b=b.flush();g=new Uint8Array(b.length+6);g.set(new Uint8Array([120,156]));g.set(b,2);g.set(new Uint8Array([d&255,
d>>8&255,d>>16&255,d>>24&255]),b.length+2);b=String.fromCharCode.apply(null,g);c("<</Length "+b.length+" /Filter [/FlateDecode]>>")}else c("<</Length "+b.length+">>");ba(b);c("endobj")}N[1]=P;c("1 0 obj");c("<</Type /Pages");a="/Kids [";for(d=0;d<z;d++)a+=3+2*d+" 0 R ";c(a+"]");c("/Count "+z);c(">>");c("endobj");v.publish("postPutPages");v.publish("putAdditionalObjects");for(a=0;a<W.length;a++)e=W[a],N[e.objId]=P,c(e.objId+" 0 obj"),c(e.content),c("endobj");C+=W.length;v.publish("postPutAdditionalObjects");
for(var l in r)r.hasOwnProperty(l)&&(a=r[l],a.objectNumber=K(),c("<</BaseFont/"+a.PostScriptName+"/Type/Font"),"string"===typeof a.encoding&&c("/Encoding/"+a.encoding),c("/Subtype/Type1>>"),c("endobj"));for(var y in H)if(H.hasOwnProperty(y)){l=H[y];l.objectNumber=K();c("<<");a=void 0;for(a in l)switch(a){case "opacity":c("/ca "+h(l[a]))}c(">>");c("endobj")}for(var p in M)M.hasOwnProperty(p)&&(y=M[p],y.objectNumber=K(),c("<<"),c("/Type /XObject"),c("/Subtype /Form"),c("/BBox ["+[h(y.x),h(y.y),h(y.x+
y.width),h(y.y+y.height)].join(" ")+"]"),c("/Matrix ["+y.matrix.toString()+"]"),y=y.pages[1].join("\n"),c("/Length "+y.length),c(">>"),ba(y),c("endobj"));for(var n in u)if(u.hasOwnProperty(n))if(u[n]instanceof f.ShadingPattern){p=u[n];y=K();l=p.colors;a=[];for(d=0;1>d;d+=.05)a.push(d);a.push(1);0!=l[0].offset&&l.unshift({offset:0,color:l[0].color});1!=l[l.length-1].offset&&l.push({offset:1,color:l[l.length-1].color});e="";for(b=g=0;b<a.length;b++){for(d=a[b];d>l[g+1].offset;)g++;var Y=l[g].offset;
d=(d-Y)/(l[g+1].offset-Y);var Y=l[g].color,Ca=l[g+1].color;e+=va(Math.round((1-d)*Y[0]+d*Ca[0]).toString(16))+va(Math.round((1-d)*Y[1]+d*Ca[1]).toString(16))+va(Math.round((1-d)*Y[2]+d*Ca[2]).toString(16))}l=e.trim();c("<< /FunctionType 0");c("/Domain [0.0 1.0]");c("/Size [21]");c("/BitsPerSample 8");c("/Range [0.0 1.0 0.0 1.0 0.0 1.0]");c("/Decode [0.0 1.0 0.0 1.0 0.0 1.0]");c("/Length "+l.length);c("/Filter /ASCIIHexDecode");c(">>");ba(l);c("endobj");p.objectNumber=K();c("<< /ShadingType "+p.type);
c("/ColorSpace /DeviceRGB");l="/Coords ["+k(parseFloat(p.coords[0]))+" "+k(parseFloat(p.coords[1]))+" ";l=2===p.type?l+(k(parseFloat(p.coords[2]))+" "+k(parseFloat(p.coords[3]))):l+(k(parseFloat(p.coords[2]))+" "+k(parseFloat(p.coords[3]))+" "+k(parseFloat(p.coords[4]))+" "+k(parseFloat(p.coords[5])));c(l+"]");p.matrix&&c("/Matrix ["+p.matrix.toString()+"]");c("/Function "+y+" 0 R");c("/Extend [true true]");c(">>");c("endobj")}else u[n]instanceof f.TilingPattern&&(p=u[n],y=K(),c("<<"),Ha(),c(">>"),
c("endobj"),p.objectNumber=K(),c("<< /Type /Pattern"),c("/PatternType 1"),c("/PaintType 1"),c("/TilingType 1"),c("/BBox ["+p.boundingBox.map(k).join(" ")+"]"),c("/XStep "+k(p.xStep)),c("/YStep "+k(p.yStep)),c("/Length "+p.stream.length),c("/Resources "+y+" 0 R"),p.matrix&&c("/Matrix ["+p.matrix.toString()+"]"),c(">>"),ba(p.stream),c("endobj"));v.publish("putResources");N[2]=P;c("2 0 obj");c("<<");Ha();c(">>");c("endobj");v.publish("postPutResources");K();c("<<");c("/Producer (jsPDF "+q.version+")");
for(var x in T)T.hasOwnProperty(x)&&T[x]&&c("/"+x.substr(0,1).toUpperCase()+x.substr(1)+" ("+ya(T[x])+")");n=new Date;x=n.getTimezoneOffset();p=Math.abs(x%60);x=[0>x?"+":"-",U(Math.floor(Math.abs(x/60))),"'",U(p),"'"].join("");c(["/CreationDate (D:",n.getFullYear(),U(n.getMonth()+1),U(n.getDate()),U(n.getHours()),U(n.getMinutes()),U(n.getSeconds()),x,")"].join(""));c(">>");c("endobj");K();c("<<");c("/Type /Catalog");c("/Pages 1 0 R");O||(O="fullwidth");switch(O){case "fullwidth":c("/OpenAction [3 0 R /FitH null]");
break;case "fullheight":c("/OpenAction [3 0 R /FitV null]");break;case "fullpage":c("/OpenAction [3 0 R /Fit]");break;case "original":c("/OpenAction [3 0 R /XYZ null null 1]");break;default:n=""+O,"%"===n.substr(n.length-1)&&(O=parseInt(O)/100),"number"===typeof O&&c("/OpenAction [3 0 R /XYZ null null "+h(O)+"]")}ja||(ja="continuous");switch(ja){case "continuous":c("/PageLayout /OneColumn");break;case "single":c("/PageLayout /SinglePage");break;case "two":case "twoleft":c("/PageLayout /TwoColumnLeft");
break;case "tworight":c("/PageLayout /TwoColumnRight")}ua&&c("/PageMode /"+ua);v.publish("putCatalog");c(">>");c("endobj");n=P;c("xref");c("0 "+(C+1));c("0000000000 65535 f ");for(x=1;x<=C;x++)"function"===typeof N[x]?c(("0000000000"+N[x]()).slice(-10)+" 00000 n "):c(("0000000000"+N[x]).slice(-10)+" 00000 n ");c("trailer");c("<<");c("/Size "+(C+1));c("/Root "+C+" 0 R");c("/Info "+(C-1)+" 0 R");c(">>");c("startxref");c(n);c("%%EOF");da=!0;return ra.join("\n")},Ma=function(a){var b="n";if("D"===a)b=
"S";else if("F"===a)b="f";else if("FD"===a||"DF"===a)b="B";else if("f"===a||"f*"===a||"B"===a||"B*"===a)b=a;return b},ma=function(a,b,g){a=Ma(a);if(b){g||(g=ka);var d=pa[b],e=u[d];if(e instanceof f.ShadingPattern)c("q"),c("W "+a),e.gState&&f.setGState(e.gState),c(g.toString()+" cm"),c("/"+d+" sh"),c("Q");else if(e instanceof f.TilingPattern){var l=new R(1,0,0,-1,0,Q);g.matrix&&(l=wa(g.matrix||ka,l),d=e.createClone(b,g.boundingBox,g.xStep,g.yStep,l).id);c("q");c("/Pattern cs");c("/"+d+" scn");e.gState&&
f.setGState(e.gState);c(a);c("Q")}}else c(a)},Na=function(){for(var a=Da(),b=a.length,c=new ArrayBuffer(b),d=new Uint8Array(c);b--;)d[b]=a.charCodeAt(b);return c},Ea=function(){return new Blob([Na()],{type:"application/pdf"})},Oa=function(a){a.foo=function(){try{return a.apply(this,arguments)}catch(c){var b=c.stack||"";~b.indexOf(" at ")&&(b=b.split(" at ")[1]);b="Error in function "+b.split("\n")[0].split("<")[0]+": "+c.message;if(t.console)t.console.error(b,c),t.alert&&alert(b);else throw Error(b);
}};a.foo.bar=a;return a.foo}(function(a,b){var c="dataur"===(""+a).substr(0,6)?"data:application/pdf;base64,"+btoa(Da()):0;switch(a){case void 0:return Da();case "save":if(navigator.getUserMedia&&(void 0===t.URL||void 0===t.URL.createObjectURL))return f.output("dataurlnewwindow");saveAs(Ea(),b);"function"===typeof saveAs.unload&&t.setTimeout&&setTimeout(saveAs.unload,911);break;case "arraybuffer":return Na();case "blob":return Ea();case "bloburi":case "bloburl":return t.URL&&t.URL.createObjectURL(Ea())||
void 0;case "datauristring":case "dataurlstring":return c;case "dataurlnewwindow":if((a=t.open(c))||"undefined"===typeof safari)return a;case "datauri":case "dataurl":return t.document.location.href=c;default:throw Error('Output type "'+a+'" is not supported.');}});switch(A){case "pt":E=1;break;case "mm":E=72/25.4000508;break;case "cm":E=72/2.54000508;break;case "in":E=72;break;case "px":E=96/72;break;case "pc":E=12;break;case "em":E=12;break;case "ex":E=6;break;default:throw"Invalid unit: "+A;}f.internal=
{pdfEscape:ya,getStyle:Ma,getFont:function(){return r[Ba.apply(f,arguments)]},getFontSize:function(){return L},getLineHeight:function(){return L*oa},write:function(a){c(1===arguments.length?a:Array.prototype.join.call(arguments," "))},getCoordinateString:function(a){return h(a)},getVerticalCoordinateString:function(a){return h(a)},collections:{},newObject:K,newAdditionalObject:function(){var a=2*m.length+1,a=a+W.length,a={objId:a,content:""};W.push(a);return a},newObjectDeferred:function(){C++;N[C]=
function(){return P};return C},newObjectDeferredBegin:function(a){N[a]=P},putStream:ba,events:v,scaleFactor:E,pageSize:{get width(){return X},get height(){return Q}},output:function(a,b){return Oa(a,b)},getNumberOfPages:function(){return m.length-1},pages:m,out:c,f2:h,getPageInfo:function(a){return{objId:2*(a-1)+3,pageNumber:a,pageContext:J[a]}},getCurrentPageInfo:function(){return{objId:2*(I-1)+3,pageNumber:I,pageContext:J[I]}},getPDFVersion:function(){return"1.3"}};f.GState=function(a){for(var b in a)a.hasOwnProperty(b)&&
0<="opacity".indexOf(b)&&(this[b]=a[b]);this.id="";this.objectNumber=-1;this.equals=function(a){if(!a||typeof a!==typeof this)return!1;var b=0,c;for(c in this)if(!(0<="id,objectNumber,equals".indexOf(c))){if(this.hasOwnProperty(c)&&!a.hasOwnProperty(c)||this[c]!==a[c])return!1;b++}for(c in a)a.hasOwnProperty(c)&&0>"id,objectNumber,equals".indexOf(c)&&b--;return 0===b}};f.addGState=function(a,b){Ja(a,b);return this};f.addPage=function(){La.apply(this,arguments);return this};f.setPage=function(){Ka.apply(this,
arguments);return this};f.insertPage=function(a){this.addPage();this.movePage(I,a);return this};f.movePage=function(a,b){var c,d,e;if(a>b){e=m[a];d=B[a];for(c=J[a];a>b;a--)m[a]=m[a-1],B[a]=B[a-1],J[a]=J[a-1];m[b]=e;B[b]=d;J[b]=c;this.setPage(b)}else if(a<b){e=m[a];d=B[a];for(c=J[a];a<b;a++)m[a]=m[a+1],B[a]=B[a+1],J[a]=J[a+1];m[b]=e;B[b]=d;J[b]=c;this.setPage(b)}return this};f.deletePage=function(){Ra.apply(this,arguments);return this};f.setDisplayMode=function(a,b,c){O=a;ja=b;ua=c;return this};f.saveGraphicsState=
function(){c("q");Fa.push({key:D,size:L});return this};f.restoreGraphicsState=function(){c("Q");var a=Fa.pop();D=a.key;L=a.size;return this};f.setCurrentTransformationMatrix=function(a){c(a.toString()+" cm");return this};f.beginFormObject=function(a,b,c,d,e){fa.push(new la);z=I=0;m=[];ga=a;ha=b;ia=e;Aa(c,d);return this};f.endFormObject=function(a){if(!ea[a]){var b=new la,c="Xo"+(Object.keys(M).length+1).toString(10);b.id=c;ea[a]=c;M[c]=b;v.publish("addFormObject",b);fa.pop().restore()}return this};
f.doFormObject=function(a,b){a=M[ea[a]];c("q");c(b.toString()+" cm");c("/"+a.id+" Do");c("Q");return this};f.getFormObject=function(a){a=M[ea[a]];return{x:a.x,y:a.y,width:a.width,height:a.height,matrix:a.matrix}};f.Matrix=R;f.matrixMult=wa;f.unitMatrix=ka;f.ShadingPattern=function(a,b,c,d,e){this.type="axial"===a?2:3;this.coords=b;this.colors=c;this.gState=d;this.matrix=e;this.id="";this.objectNumber=-1};f.TilingPattern=function(a,b,c,d,e){this.boundingBox=a;this.xStep=b;this.yStep=c;this.stream=
"";this.cloneIndex=0;this.gState=d;this.matrix=e;this.id="";this.objectNumber=-1};f.TilingPattern.prototype={createClone:function(a,b,c,d,e){b=new f.TilingPattern(b||this.boundingBox,c||this.xStep,d||this.yStep,this.gState,e||this.matrix);b.stream=this.stream;a=a+"$$"+this.cloneIndex++ +"$$";xa(a,b);return b}};f.addShadingPattern=function(a,b){xa(a,b);return this};f.beginTilingPattern=function(a){var b=a.boundingBox[0],c=a.boundingBox[1],d=a.boundingBox[2]-a.boundingBox[0],e=a.boundingBox[3]-a.boundingBox[1];
a=a.matrix;fa.push(new la);z=I=0;m=[];ga=b;ha=c;ia=a;Aa(d,e)};f.endTilingPattern=function(a,b){b.stream=m[I].join("\n");xa(a,b);v.publish("endTilingPattern",b);fa.pop().restore()};f.text=function(a,b,g,d,e,l){function f(a){a=a.split("\t").join(Array(w.TabLen||9).join(" "));return ya(a,d)}if("number"===typeof a){var p=g;g=b;b=a;a=p}"string"===typeof a&&(a=a.match(/[\n\r]/)?a.split(/\r\n|\r|\n/g):[a]);"string"===typeof e&&(l=e,e=null);"string"===typeof d&&(l=d,d=null);"number"===typeof d&&(e=d,d=null);
e&&"number"===typeof e?(e*=Math.PI/180,p=Math.cos(e),e=Math.sin(e),e=new R(p,e,-e,p,0,0)):e||(e=ka);d=d||{};"noBOM"in d||(d.noBOM=!0);"autoencode"in d||(d.autoencode=!0);var p="",n=this.internal.getCurrentPageInfo().pageContext;!0===d.stroke?!0!==n.lastTextWasStroke&&(p="1 Tr\n",n.lastTextWasStroke=!0):(n.lastTextWasStroke&&(p="0 Tr\n"),n.lastTextWasStroke=!1);"undefined"===typeof this._runningPageHeight&&(this._runningPageHeight=0);if("string"===typeof a)a=f(a);else if("[object Array]"===Object.prototype.toString.call(a)){for(var k=
a.concat(),n=[],q=k.length;q--;)n.push(f(k.shift()));if(l){var x,m,v=L*oa,t=a.map(function(a){return this.getStringUnitWidth(a)*L},this);m=Math.max.apply(Math,t);if("center"===l)k=b-m/2,b-=t[0]/2;else if("right"===l)k=b-m,b-=t[0];else throw Error('Unrecognized alignment option, use "center" or "right".');x=b;a=n[0]+") Tj\n";i=1;for(q=n.length;i<q;i++){var u=m-t[i];"center"===l&&(u/=2);a+=k-x+u+" -"+v+" Td ("+n[i];x=k+u;i<q-1&&(a+=") Tj\n")}}else a=n.join(") Tj\nT* (")}else throw Error('Type of text must be string or Array. "'+
a+'" is not recognized.');g=h(g);b=new R(1,0,0,-1,b,g);e=wa(b,e);c("BT\n"+L*oa+" TL\n"+p+(e.toString()+" Tm")+"\n("+a+") Tj\nET");return this};f.lstext=function(a,b,c,d){for(var e=0,l=a.length;e<l;e++,b+=d)this.text(a[e],b,c)};f.line=function(a,b,c,d){return this.lines([[c-a,d-b]],a,b,[1,1],"D")};f.clip=function(){c("W");c("S")};f.lines=function(a,b,g,d,e,l,f,h){var n,q,m,t,u,v,w,r;"number"===typeof a&&(n=g,g=b,b=a,a=n);d=d||[1,1];c(k(b)+" "+k(g)+" m ");n=d[0];d=d[1];q=a.length;r=g;for(g=0;g<q;g++)m=
a[g],2===m.length?(b=m[0]*n+b,r=m[1]*d+r,c(k(b)+" "+k(r)+" l")):(t=m[0]*n+b,u=m[1]*d+r,v=m[2]*n+b,w=m[3]*d+r,b=m[4]*n+b,r=m[5]*d+r,c(k(t)+" "+k(u)+" "+k(v)+" "+k(w)+" "+k(b)+" "+k(r)+" c"));l&&c("h");ma(e,f,h);return this};f.path=function(a,b,g,d){for(var e=0;e<a.length;e++){var f=a[e],h=f.c;switch(f.op){case "m":c(k(h[0])+" "+k(h[1])+" m");break;case "l":c(k(h[0])+" "+k(h[1])+" l");break;case "c":c([k(h[0]),k(h[1]),k(h[2]),k(h[3]),k(h[4]),k(h[5]),"c"].join(" "));break;case "h":c("h")}}ma(b,g,d);
return this};f.rect=function(a,b,g,d,e,f,k){c([h(a),h(b),h(g),h(-d),"re"].join(" "));ma(e,f,k);return this};f.triangle=function(a,b,c,d,e,f,h,k,n){this.lines([[c-a,d-b],[e-c,f-d],[a-e,b-f]],a,b,[1,1],h,!0,k,n);return this};f.roundedRect=function(a,b,c,d,e,f,h,k,n){var m=4/3*(Math.SQRT2-1);e=Math.min(e,.5*c);f=Math.min(f,.5*d);this.lines([[c-2*e,0],[e*m,0,e,f-f*m,e,f],[0,d-2*f],[0,f*m,-(e*m),f,-e,f],[-c+2*e,0],[-(e*m),0,-e,-(f*m),-e,-f],[0,-d+2*f],[0,-(f*m),e*m,-f,e,-f]],a+e,b,[1,1],h,!0,k,n);return this};
f.ellipse=function(a,b,g,d,e,f,k){var m=4/3*(Math.SQRT2-1)*g,n=4/3*(Math.SQRT2-1)*d;c([h(a+g),h(b),"m",h(a+g),h(b-n),h(a+m),h(b-d),h(a),h(b-d),"c"].join(" "));c([h(a-m),h(b-d),h(a-g),h(b-n),h(a-g),h(b),"c"].join(" "));c([h(a-g),h(b+n),h(a-m),h(b+d),h(a),h(b+d),"c"].join(" "));c([h(a+m),h(b+d),h(a+g),h(b+n),h(a+g),h(b),"c"].join(" "));ma(e,f,k);return this};f.circle=function(a,b,c,d,e,f){return this.ellipse(a,b,c,c,d,e,f)};f.setProperties=function(a){for(var b in T)T.hasOwnProperty(b)&&a[b]&&(T[b]=
a[b]);return this};f.setFontSize=function(a){L=a;c("/"+D+" "+L+" Tf");return this};f.getFontSize=function(){return L};f.setFont=function(a,b){D=Ba(a,b);c("/"+D+" "+L+" Tf");return this};f.setFontStyle=f.setFontType=function(a){D=Ba(void 0,a);return this};f.getFontList=function(){var a={},b,c,d;for(b in G)if(G.hasOwnProperty(b))for(c in a[b]=d=[],G[b])G[b].hasOwnProperty(c)&&d.push(c);return a};f.addFont=function(a,b,c){Ia(a,b,c,"StandardEncoding")};f.setLineWidth=function(a){c(a.toFixed(2)+" w");
return this};f.setDrawColor=function(a,b,g,d){a=void 0===b||void 0===d&&a===b===g?"string"===typeof a?a+" G":h(a/255)+" G":void 0===d?"string"===typeof a?[a,b,g,"RG"].join(" "):[h(a/255),h(b/255),h(g/255),"RG"].join(" "):"string"===typeof a?[a,b,g,d,"K"].join(" "):[h(a),h(b),h(g),h(d),"K"].join(" ");c(a);return this};f.setFillColor=function(a,b,g,d){void 0===b||void 0===d&&a===b===g?a="string"===typeof a?a+" g":h(a/255)+" g":void 0===d||"object"===typeof d?(a="string"===typeof a?[a,b,g,"rg"].join(" "):
[h(a/255),h(b/255),h(g/255),"rg"].join(" "),d&&0===d.a&&(a="255 255 255 rg")):a="string"===typeof a?[a,b,g,d,"k"].join(" "):[h(a),h(b),h(g),h(d),"k"].join(" ");c(a);return this};f.setTextColor=function(a,b,g){"string"===typeof a&&/^#[0-9A-Fa-f]{6}$/.test(a)&&(g=parseInt(a.substr(1),16),a=g>>16&255,b=g>>8&255,g&=255);aa=0===a&&0===b&&0===g||"undefined"===typeof b?k(a/255)+" g":[k(a/255),k(b/255),k(g/255),"rg"].join(" ");c(aa);return this};f.setGState=function(a){a="string"===typeof a?H[qa[a]]:Ja(null,
a);a.equals(Ga)||(c("/"+a.id+" gs"),Ga=a)};f.CapJoinStyles={0:0,butt:0,but:0,miter:0,1:1,round:1,rounded:1,circle:1,2:2,projecting:2,project:2,square:2,bevel:2};f.setLineCap=function(a){var b=this.CapJoinStyles[a];if(void 0===b)throw Error("Line cap style of '"+a+"' is not recognized. See or extend .CapJoinStyles property for valid styles");sa=b;c(b+" J");return this};f.setLineJoin=function(a){var b=this.CapJoinStyles[a];if(void 0===b)throw Error("Line join style of '"+a+"' is not recognized. See or extend .CapJoinStyles property for valid styles");
ta=b;c(b+" j");return this};f.setLineMiterLimit=function(a){c(h(a)+" M");return this};f.setLineDashPattern=function(a,b){c(["["+(void 0!==a[0]?a[0]:""),(void 0!==a[1]?a[1]:"")+"]",b,"d"].join(" "));return this};f.output=Oa;f.save=function(a){f.output("save",a)};for(var na in q.API)q.API.hasOwnProperty(na)&&("events"===na&&q.API.events.length?function(a,b){var c,d,e;for(e=b.length-1;-1!==e;e--)c=b[e][0],d=b[e][1],a.subscribe.apply(a,[c].concat("function"===typeof d?[d]:d))}(v,q.API.events):f[na]=q.API[na]);
(function(){for(var a=[["Helvetica","helvetica","normal"],["Helvetica-Bold","helvetica","bold"],["Helvetica-Oblique","helvetica","italic"],["Helvetica-BoldOblique","helvetica","bolditalic"],["Courier","courier","normal"],["Courier-Bold","courier","bold"],["Courier-Oblique","courier","italic"],["Courier-BoldOblique","courier","bolditalic"],["Times-Roman","times","normal"],["Times-Bold","times","bold"],["Times-Italic","times","italic"],["Times-BoldItalic","times","bolditalic"],["ZapfDingbats","zapfdingbats"]],
b=0,c=a.length;b<c;b++){var d=Ia(a[b][0],a[b][1],a[b][2],"StandardEncoding"),e=a[b][0].split("-"),f=e[0],e=e[1]||"";G.hasOwnProperty(f)||(G[f]={});G[f][e]=d}v.publish("addFonts",{fonts:r,dictionary:G})})();D="F1";La(F,V);v.publish("initialized");return f}var za={a0:[2383.94,3370.39],a1:[1683.78,2383.94],a2:[1190.55,1683.78],a3:[841.89,1190.55],a4:[595.28,841.89],a5:[419.53,595.28],a6:[297.64,419.53],a7:[209.76,297.64],a8:[147.4,209.76],a9:[104.88,147.4],a10:[73.7,104.88],b0:[2834.65,4008.19],b1:[2004.09,
2834.65],b2:[1417.32,2004.09],b3:[1000.63,1417.32],b4:[708.66,1000.63],b5:[498.9,708.66],b6:[354.33,498.9],b7:[249.45,354.33],b8:[175.75,249.45],b9:[124.72,175.75],b10:[87.87,124.72],c0:[2599.37,3676.54],c1:[1836.85,2599.37],c2:[1298.27,1836.85],c3:[918.43,1298.27],c4:[649.13,918.43],c5:[459.21,649.13],c6:[323.15,459.21],c7:[229.61,323.15],c8:[161.57,229.61],c9:[113.39,161.57],c10:[79.37,113.39],dl:[311.81,623.62],letter:[612,792],"government-letter":[576,756],legal:[612,1008],"junior-legal":[576,
360],ledger:[1224,792],tabloid:[792,1224],"credit-card":[153,243]};q.API={events:[]};q.version="1.0.0-trunk";"function"===typeof define&&define.amd?define("jsPDF",function(){return q}):"undefined"!==typeof module&&module.exports?module.exports=q:t.jsPDF=q;return q}("undefined"!==typeof self&&self||"undefined"!==typeof window&&window||this);
