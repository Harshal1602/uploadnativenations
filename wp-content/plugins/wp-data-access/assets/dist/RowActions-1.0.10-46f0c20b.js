import{l as s,r as b,bI as k,j as e,cq as A,e as l}from"./main-1.0.10.js";import{u as M,B as V,T as d,ac as p,P as w,ao as B,l as O,a4 as T}from"./main-1.0.10-f52b9bd1.js";import{C as q}from"./settings-1.0.10-7d354621.js";import{d as U}from"./ActionsDml-1.0.10-1992820f.js";import{I as m}from"./iconBase-1.0.10-ed1594d9.js";import"./FormControlLabel-1.0.10-8c056e28.js";import"./TextField-1.0.10-1c88e8ee.js";import"./Close-1.0.10-2cc4e9e5.js";import"./Menu-1.0.10-18fe74ce.js";import"./DialogContent-1.0.10-806b7ca9.js";import"./AdminTheme-1.0.10-77503373.js";import"./CardContent-1.0.10-fdbae602.js";import"./Tabs-1.0.10-904035cb.js";const _=({metaData:o,appId:c,rowId:r,rowData:x,storeTableSettings:n,appLanguage:t,showForm:f,refetch:R})=>{var v,u;s.debug(o,c,r,x);const a=M(),[y,j]=b.useState(!1),h=Object.keys(r).length>0,C=n.viewLink,E=!k(o)&&((v=o==null?void 0:o.privs)==null?void 0:v.update)&&n.transactions.update&&h,P=!k(o)&&((u=o==null?void 0:o.privs)==null?void 0:u.delete)&&n.transactions.delete&&h;return e.jsxs(V,{sx:{display:"flex",alignItems:"center",gap:"5px"},children:[C&&e.jsx(d,{title:t.view,children:e.jsx(m,{color:"primary",onClick:i=>{Object.keys(r).length===0&&a(A({appId:c,data:x,context:null})),f(r,p.VIEW),i.stopPropagation()},children:e.jsx(w,{})})}),E&&e.jsx(d,{title:t.edit,children:e.jsx(m,{color:"primary",onClick:i=>{f(r,p.UPDATE),i.stopPropagation()},children:e.jsx(B,{})})}),P&&e.jsxs(e.Fragment,{children:[e.jsx(d,{title:t.delete,children:e.jsx(m,{color:"error",onClick:i=>{j(!0),i.stopPropagation()},children:e.jsx(O,{})})}),e.jsx(q,{title:t.deleteRowTitle,message:t.deleteRowMessage,open:y,setOpen:j,onConfirm:()=>{U(c,r,i=>{if(i!=null&&i.code&&(i!=null&&i.message))switch(i.code){case"ok":l(t.deletedSuccessful,{variant:"success"}),R();break;default:s.error(i),l(i.message??t.invalidResponse,{variant:"error"})}else s.error(i),l(t.invalidResponse,{variant:"error"})},i=>{s.error("error",i),l(i??t.invalidResponse,{variant:"error"})})},locale:t,theme:T})]})]})};export{_ as default};
