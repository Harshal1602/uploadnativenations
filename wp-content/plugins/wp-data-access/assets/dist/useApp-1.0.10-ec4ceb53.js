import{l as n,r as b,A as z,j as a,di as q,dj as O,e as j,C as T,dk as I,dl as V,dm as F,dn as Y,dp as G,dq as J,dr as K,ds as L,dt as W,du as Q,dv as X,dw as Z,dx as $,dy as U,dz as ee,dA as ae,dB as te,dC as A,dD as se}from"./main-1.0.10.js";import{u as k,B as y,a as ne,T as le,an as re,c as R,b as f}from"./main-1.0.10-f52b9bd1.js";import{A as oe}from"./AdminTheme-1.0.10-77503373.js";import{m as ie}from"./ActionsApp-1.0.10-3d5dae5f.js";import{F as C,b as ce,a as v,A as _,T as E}from"./TextField-1.0.10-1c88e8ee.js";import{P as de,I as ue}from"./iconBase-1.0.10-ed1594d9.js";import{F as pe}from"./FormControlLabel-1.0.10-8c056e28.js";import{C as me}from"./Checkbox-1.0.10-8b17dcc2.js";import{L as B}from"./Link-1.0.10-0c622c62.js";import{d as N,e as P,h as be}from"./ActionsExplorer-1.0.10-9ae320fe.js";const we=({app:t,setIsUpdated:c,isRelationTable:r})=>{n.debug(t,r);const u=k(),[p,i]=b.useState(!1),x=b.useRef(!0);b.useEffect(()=>{x.current?x.current=!1:e()},[t.appDatabase,t.appTable,t.appRelationTable,u]);const e=()=>{t.appDatabase!==null&&(!r&&t.appTable!==null||r&&t.appRelationTable!==null)&&(i(!0),ie(t.appDatabase,r?t.appRelationTable??"":t.appTable??"",!1,function(d){const h=d==null?void 0:d.data;if(n.debug("response data",t.appDatabase,r?t.appRelationTable:t.appTable,h),!h.columns)j(T.contactSupport,{variant:"error"});else{const m=[];h.columns.map(S=>{S.column_name!==void 0&&m.push({columnName:S.column_name,isSelected:!0})}),u(r?I({appRelationColumns:m}):V({appColumns:m,appMetaData:h}))}i(!1)},d=>{n.error("error",d),j(d??T.contactSupport,{variant:"error"}),i(!1)}))},[l,s]=b.useState(!1);n.debug("hasErrors",l);const o=r?t.appRelationColumns:t.appColumns;n.debug("columns",o);const[D,g]=b.useState(!1),[w,H]=b.useState(!1);return b.useEffect(()=>{Number(t.appType)!==z.DATATABLE&&t.appMetaData.primary_key!==void 0?s(t.appMetaData.primary_key.length===0||t.appMetaData.primary_key.filter(d=>o.filter(m=>m.isSelected).map(m=>m.isSelected?m.columnName:!1).includes(d)).length!==t.appMetaData.primary_key.length):s(!1)},[t,o]),a.jsxs(y,{sx:{position:"relative"},children:[a.jsxs(C,{fullWidth:!0,children:[a.jsxs(y,{component:"fieldset",sx:{borderWidth:1,borderRadius:"4px","& .MuiPaper-root":{border:"none",padding:"15px 20px"},"& .MuiFormHelperText-root":{marginLeft:"20px",marginBottom:"20px"}},children:[a.jsx("legend",{style:{fontSize:"0.75rem",fontWeight:400,color:"rgba(0, 0, 0, 0.6)"},children:"Select columns *"}),a.jsxs(de,{variant:"outlined",sx:{padding:"15px 30px"},children:[o.length===0&&a.jsx(C,{fullWidth:!0,sx:{margin:"5px 0"},children:a.jsx(ce,{sx:{color:"inherit"},children:"No table selected"})}),...o.map((d,h)=>{var m;return a.jsx(pe,{control:a.jsx(me,{checked:d.isSelected,onChange:(S,M)=>{u(r?q({appRelationColumns:[...t.appRelationColumns.slice(0,h),{columnName:d.columnName,isSelected:M},...t.appRelationColumns.slice(h+1)]}):O({appColumns:[...t.appColumns.slice(0,h),{columnName:d.columnName,isSelected:M},...t.appColumns.slice(h+1)]})),c&&c(!0)}}),label:a.jsx(y,{sx:{color:l&&t.appMetaData.primary_key.includes(d.columnName)?(m=oe)==null?void 0:m.palette.error.main:""},children:d.columnName+(l&&t.appMetaData.primary_key.includes(d.columnName)?" (primary key column)":"")}),sx:{width:"100%"}})})]})]}),a.jsx(v,{children:"Only selected columns are available in tables and forms. Unselected columns are excluded from responses. At least one column must be selected."}),!p&&t.appDatabase!==null&&(!r&&t.appTable!==null||!r&&t.appRelationTable!==null)&&l&&a.jsxs(v,{error:!0,sx:{marginTop:"20px",width:"fit-content",display:"inline-grid",gridTemplateColumns:"40px auto",justifyContent:"space-around",alignItems:"center"},children:[a.jsx(ne,{size:"24px"}),a.jsx("span",{children:t.appMetaData.primary_key.length===0?a.jsx(a.Fragment,{children:"This table contains no primary key. Transactions are not supported for tables without a primary key. Please create a primary key to continue or select app type Data Table in the app info tab."}):a.jsx(a.Fragment,{children:"Transactions require all primary key columns to be selected. With the current settings transactions will be disabled."})})]})]}),a.jsx(y,{sx:{position:"absolute",top:"15px",right:"10px"},children:a.jsx(le,{title:"Refresh column list",children:a.jsx(ue,{onClick:()=>{e()},children:a.jsx(re,{})})})}),a.jsx(C,{fullWidth:!0,children:a.jsxs(v,{component:"div",sx:{marginTop:"20px",marginLeft:0},children:[a.jsxs(B,{sx:{textDecoration:"none",cursor:"pointer",display:"inline-flex",marginBottom:0,"& svg":{fontSize:"1rem",marginRight:"2px"}},onClick:()=>g(!D),children:[a.jsx(R,{}),"Which columns should be included | excluded?"]}),D&&a.jsx(y,{sx:{marginTop:"20px",marginBottom:"25px"},children:"In most cases, you can simply select all columns. You can hide specific columns later in the Table Builder and Form Builder. Only if your table contains columns with sensitive data that you absolutely do not want to share with anyone, should you deselect them here. This ensures that the contents of these columns will not be included in server responses, maintaining their privacy."})]})}),a.jsx(C,{fullWidth:!0,children:a.jsxs(v,{component:"div",sx:{marginTop:0,marginBottom:"10px",marginLeft:0},children:[a.jsxs(B,{sx:{textDecoration:"none",cursor:"pointer",display:"inline-flex","& svg":{fontSize:"1rem",marginRight:"2px"}},onClick:()=>H(!w),children:[a.jsx(R,{}),"What to do when a table structure changes?"]}),w&&a.jsx(y,{sx:{marginTop:"20px"},children:"Click the refresh icon and save the new structure. Proceed to use the Table Builder and Form Builder sequentially to apply the updated structure."})]})})]})},Se=({setIsUpdated:t,isDetail:c,isRelationTable:r})=>{const u=k(),p=f(s=>F(s));n.debug("appDatabase",p);const i=f(s=>Y(s));n.debug("tables",i);const x=f(s=>G(s));n.debug("views",x);const e=f(s=>J(s));n.debug("appTable",e);const l=f(s=>K(s));return n.debug("appRelationTable",l),b.useEffect(()=>{p!==null&&(i.length===0||x.length===0)&&(N(p,function(s){const o=s==null?void 0:s.data;n.debug("response data",o),u(L({tables:o}))},s=>{n.error("error",s),j(s??T.contactSupport,{variant:"error"})}),P(p,function(s){const o=s==null?void 0:s.data;n.debug("response data",o),u(W({views:o}))},s=>{n.error("error",s),j(s??T.contactSupport,{variant:"error"})}))},[p]),a.jsxs(C,{sx:{width:"100%",marginTop:"8px"},children:[a.jsx(_,{options:p!==null?i.concat(x).sort():[],value:r?l:e,onChange:(s,o)=>{u(r?Q({appRelationTable:o??null}):X({appTable:o??null})),t&&t(!0)},renderInput:s=>a.jsx(E,{...s,label:"Table *",variant:"outlined"}),sx:{width:"100%"}}),a.jsxs(v,{children:["Select a table from the list",c===void 0&&a.jsx(a.Fragment,{children:" (additional tables can be added in the Form Builder)"}),"."]})]})},Ae=({setIsUpdated:t})=>{const c=k(),r=f(e=>Z(e));n.debug("databases",r);const u=f(e=>$(e));n.debug("wpDatabase",u);const p=f(e=>U(e));n.debug("defaultDatabase",p);const i=f(e=>F(e));n.debug("appDatabase",i),b.useEffect(()=>{r.length===0?be(function(e){const l=e==null?void 0:e.data;n.debug("response data",l);const s=[];let o="",D="";l.map(g=>{s.push(g.dbs),g.dbs_type.toLocaleLowerCase()==="wp"&&(o=g.dbs,D=g.dbs)}),s.sort((g,w)=>g.localeCompare(w,void 0,{sensitivity:"base"})),c(ee({databases:s})),c(ae({wpDatabase:o})),c(te({defaultDatabase:D})),i===null&&c(A({appDatabase:D})),n.debug(s,o,D)},e=>{n.error("error",e),j(e??T.contactSupport,{variant:"error"})}):i===null&&c(A({appDatabase:p}))},[]);const x=b.useRef(!0);return b.useEffect(()=>{x.current?x.current=!1:i!==null&&r.includes(i)&&(N(i,function(e){const l=e==null?void 0:e.data;n.debug("response data",l),c(L({tables:l}))},e=>{n.error("error",e),j(e??T.contactSupport,{variant:"error"})}),P(i,function(e){const l=e==null?void 0:e.data;n.debug("response data",l),c(W({views:l}))},e=>{n.error("error",e),j(e??T.contactSupport,{variant:"error"})}))},[i]),a.jsxs(C,{sx:{width:"100%",marginTop:"8px"},children:[a.jsx(_,{options:r,value:i,onChange:(e,l)=>{c(A({appDatabase:l??null})),t&&t(!0)},getOptionLabel:e=>u===e?e+" (WordPress database)":e,renderInput:e=>a.jsx(E,{...e,label:"Database *",variant:"outlined"}),renderOption:(e,l)=>a.jsxs(y,{component:"li",sx:{"& > img":{mr:2,flexShrink:0}},...e,children:[l," ",u===l?" (WordPress database)":""]}),sx:{width:"100%"}}),a.jsx(v,{children:"Select a database from the list."})]})},ke=()=>{const t=f(c=>se(c));return n.debug("app",t),t};export{Ae as C,Se as a,we as b,ke as u};