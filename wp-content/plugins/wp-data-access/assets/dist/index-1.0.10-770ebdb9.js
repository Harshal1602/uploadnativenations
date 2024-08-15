import{a as $,g as I,s as O,_ as h,u as B,b as L,T as g,h as W,f as q}from"./iconBase-1.0.10-ed1594d9.js";import{r as N,j as b,b3 as z}from"./main-1.0.10.js";function F(t){return I("MuiCardHeader",t)}const K=$("MuiCardHeader",["root","avatar","action","content","title","subheader"]),S=K,X=["action","avatar","className","component","disableTypography","subheader","subheaderTypographyProps","title","titleTypographyProps"],G=t=>{const{classes:e}=t;return q({root:["root"],avatar:["avatar"],action:["action"],content:["content"],title:["title"],subheader:["subheader"]},F,e)},J=O("div",{name:"MuiCardHeader",slot:"Root",overridesResolver:(t,e)=>h({[`& .${S.title}`]:e.title,[`& .${S.subheader}`]:e.subheader},e.root)})({display:"flex",alignItems:"center",padding:16}),Q=O("div",{name:"MuiCardHeader",slot:"Avatar",overridesResolver:(t,e)=>e.avatar})({display:"flex",flex:"0 0 auto",marginRight:16}),V=O("div",{name:"MuiCardHeader",slot:"Action",overridesResolver:(t,e)=>e.action})({flex:"0 0 auto",alignSelf:"flex-start",marginTop:-4,marginRight:-8,marginBottom:-4}),Y=O("div",{name:"MuiCardHeader",slot:"Content",overridesResolver:(t,e)=>e.content})({flex:"1 1 auto"}),Z=N.forwardRef(function(e,r){const o=B({props:e,name:"MuiCardHeader"}),{action:n,avatar:a,className:l,component:i="div",disableTypography:c=!1,subheader:f,subheaderTypographyProps:s,title:u,titleTypographyProps:P}=o,d=L(o,X),p=h({},o,{component:i,disableTypography:c}),y=G(p);let m=u;m!=null&&m.type!==g&&!c&&(m=b.jsx(g,h({variant:a?"body2":"h5",className:y.title,component:"span",display:"block"},P,{children:m})));let v=f;return v!=null&&v.type!==g&&!c&&(v=b.jsx(g,h({variant:a?"body2":"body1",className:y.subheader,color:"text.secondary",component:"span",display:"block"},s,{children:v}))),b.jsxs(J,h({className:W(y.root,l),as:i,ref:r,ownerState:p},d,{children:[a&&b.jsx(Q,{className:y.avatar,ownerState:p,children:a}),b.jsxs(Y,{className:y.content,ownerState:p,children:[m,v]}),n&&b.jsx(V,{className:y.action,ownerState:p,children:n})]}))}),Ce=Z;var x={},ee=function(){var t=document.getSelection();if(!t.rangeCount)return function(){};for(var e=document.activeElement,r=[],o=0;o<t.rangeCount;o++)r.push(t.getRangeAt(o));switch(e.tagName.toUpperCase()){case"INPUT":case"TEXTAREA":e.blur();break;default:e=null;break}return t.removeAllRanges(),function(){t.type==="Caret"&&t.removeAllRanges(),t.rangeCount||r.forEach(function(n){t.addRange(n)}),e&&e.focus()}},te=ee,D={"text/plain":"Text","text/html":"Url",default:"Text"},re="Copy to clipboard: #{key}, Enter";function oe(t){var e=(/mac os x/i.test(navigator.userAgent)?"⌘":"Ctrl")+"+C";return t.replace(/#{\s*key\s*}/g,e)}function ne(t,e){var r,o,n,a,l,i,c=!1;e||(e={}),r=e.debug||!1;try{n=te(),a=document.createRange(),l=document.getSelection(),i=document.createElement("span"),i.textContent=t,i.ariaHidden="true",i.style.all="unset",i.style.position="fixed",i.style.top=0,i.style.clip="rect(0, 0, 0, 0)",i.style.whiteSpace="pre",i.style.webkitUserSelect="text",i.style.MozUserSelect="text",i.style.msUserSelect="text",i.style.userSelect="text",i.addEventListener("copy",function(s){if(s.stopPropagation(),e.format)if(s.preventDefault(),typeof s.clipboardData>"u"){r&&console.warn("unable to use e.clipboardData"),r&&console.warn("trying IE specific stuff"),window.clipboardData.clearData();var u=D[e.format]||D.default;window.clipboardData.setData(u,t)}else s.clipboardData.clearData(),s.clipboardData.setData(e.format,t);e.onCopy&&(s.preventDefault(),e.onCopy(s.clipboardData))}),document.body.appendChild(i),a.selectNodeContents(i),l.addRange(a);var f=document.execCommand("copy");if(!f)throw new Error("copy command was unsuccessful");c=!0}catch(s){r&&console.error("unable to copy using execCommand: ",s),r&&console.warn("trying IE specific stuff");try{window.clipboardData.setData(e.format||"text",t),e.onCopy&&e.onCopy(window.clipboardData),c=!0}catch(u){r&&console.error("unable to copy using clipboardData: ",u),r&&console.error("falling back to prompt"),o=oe("message"in e?e.message:re),window.prompt(o,t)}}finally{l&&(typeof l.removeRange=="function"?l.removeRange(a):l.removeAllRanges()),i&&document.body.removeChild(i),n()}return c}var ae=ne;function _(t){"@babel/helpers - typeof";return _=typeof Symbol=="function"&&typeof Symbol.iterator=="symbol"?function(e){return typeof e}:function(e){return e&&typeof Symbol=="function"&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},_(t)}Object.defineProperty(x,"__esModule",{value:!0});x.CopyToClipboard=void 0;var C=A(N),ie=A(ae),le=["text","onCopy","options","children"];function A(t){return t&&t.__esModule?t:{default:t}}function E(t,e){var r=Object.keys(t);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(t);e&&(o=o.filter(function(n){return Object.getOwnPropertyDescriptor(t,n).enumerable})),r.push.apply(r,o)}return r}function H(t){for(var e=1;e<arguments.length;e++){var r=arguments[e]!=null?arguments[e]:{};e%2?E(Object(r),!0).forEach(function(o){j(t,o,r[o])}):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(r)):E(Object(r)).forEach(function(o){Object.defineProperty(t,o,Object.getOwnPropertyDescriptor(r,o))})}return t}function se(t,e){if(t==null)return{};var r=ce(t,e),o,n;if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(t);for(n=0;n<a.length;n++)o=a[n],!(e.indexOf(o)>=0)&&Object.prototype.propertyIsEnumerable.call(t,o)&&(r[o]=t[o])}return r}function ce(t,e){if(t==null)return{};var r={},o=Object.keys(t),n,a;for(a=0;a<o.length;a++)n=o[a],!(e.indexOf(n)>=0)&&(r[n]=t[n]);return r}function ue(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function k(t,e){for(var r=0;r<e.length;r++){var o=e[r];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(t,o.key,o)}}function pe(t,e,r){return e&&k(t.prototype,e),r&&k(t,r),Object.defineProperty(t,"prototype",{writable:!1}),t}function fe(t,e){if(typeof e!="function"&&e!==null)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),Object.defineProperty(t,"prototype",{writable:!1}),e&&R(t,e)}function R(t,e){return R=Object.setPrototypeOf||function(o,n){return o.__proto__=n,o},R(t,e)}function de(t){var e=be();return function(){var o=w(t),n;if(e){var a=w(this).constructor;n=Reflect.construct(o,arguments,a)}else n=o.apply(this,arguments);return ye(this,n)}}function ye(t,e){if(e&&(_(e)==="object"||typeof e=="function"))return e;if(e!==void 0)throw new TypeError("Derived constructors may only return object or undefined");return M(t)}function M(t){if(t===void 0)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}function be(){if(typeof Reflect>"u"||!Reflect.construct||Reflect.construct.sham)return!1;if(typeof Proxy=="function")return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],function(){})),!0}catch{return!1}}function w(t){return w=Object.setPrototypeOf?Object.getPrototypeOf:function(r){return r.__proto__||Object.getPrototypeOf(r)},w(t)}function j(t,e,r){return e in t?Object.defineProperty(t,e,{value:r,enumerable:!0,configurable:!0,writable:!0}):t[e]=r,t}var U=function(t){fe(r,t);var e=de(r);function r(){var o;ue(this,r);for(var n=arguments.length,a=new Array(n),l=0;l<n;l++)a[l]=arguments[l];return o=e.call.apply(e,[this].concat(a)),j(M(o),"onClick",function(i){var c=o.props,f=c.text,s=c.onCopy,u=c.children,P=c.options,d=C.default.Children.only(u),p=(0,ie.default)(f,P);s&&s(f,p),d&&d.props&&typeof d.props.onClick=="function"&&d.props.onClick(i)}),o}return pe(r,[{key:"render",value:function(){var n=this.props;n.text,n.onCopy,n.options;var a=n.children,l=se(n,le),i=C.default.Children.only(a);return C.default.cloneElement(i,H(H({},l),{},{onClick:this.onClick}))}}]),r}(C.default.PureComponent);x.CopyToClipboard=U;j(U,"defaultProps",{onCopy:void 0,options:void 0});var me=x,T=me.CopyToClipboard;T.CopyToClipboard=T;var ve=T;const we=z(ve);export{Ce as C,we as a,ve as l};
