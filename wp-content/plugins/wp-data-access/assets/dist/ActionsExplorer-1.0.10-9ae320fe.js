import{l as g,S as o}from"./main-1.0.10.js";import{U as d}from"./main-1.0.10-f52b9bd1.js";const i=(s,e,l=!1)=>{d(o.appUrlTreeDbs,{},s,e,l)},b=(s,e,l,r=!1)=>{g.debug(s),d(o.appUrlTreeTbl,{dbs:s},e,l,r)},u=(s,e,l,r=!1)=>{g.debug(s),d(o.appUrlTreeVws,{dbs:s},e,l,r)},U=(s,e,l,r=!1)=>{g.debug(s),d(o.appUrlTreePrc,{dbs:s},e,l,r)},a=(s,e,l,r=!1)=>{g.debug(s),d(o.appUrlTreeFnc,{dbs:s},e,l,r)},T=(s,e,l,r,n=!1)=>{g.debug(s,e),d(o.appUrlTreeCls,{dbs:s,tbl:e},l,r,n)},m=(s,e,l,r,n=!1)=>{g.debug(s,e),d(o.appUrlTreeIdx,{dbs:s,tbl:e},l,r,n)},x=(s,e,l,r,n=!1)=>{g.debug(s,e),d(o.appUrlTreeFrk,{dbs:s,tbl:e},l,r,n)},C=(s,e,l,r,n=!1)=>{g.debug(s,e),d(o.appUrlTreeTrg,{dbs:s,tbl:e},l,r,n)},F=(s,e,l,r,n,t=!1)=>{g.debug(s,e,l),d(o.appUrlSettings,{action:"explorer_settings",dbs:s,tbl:e,settings:JSON.stringify(l)},r,n,t)};export{m as a,C as b,x as c,b as d,u as e,U as f,a as g,i as h,T as l,F as s};
