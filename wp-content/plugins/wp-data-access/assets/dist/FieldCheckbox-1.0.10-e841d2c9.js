import{l as b,j as s,dN as F}from"./main-1.0.10.js";import{ab as x}from"./main-1.0.10-f52b9bd1.js";import{F as j,a as m}from"./TextField-1.0.10-1c88e8ee.js";import{F as f}from"./FormControlLabel-1.0.10-8c056e28.js";import{C as h}from"./Checkbox-1.0.10-8b17dcc2.js";import"./iconBase-1.0.10-ed1594d9.js";import"./Close-1.0.10-2cc4e9e5.js";import"./Menu-1.0.10-18fe74ce.js";const H=({columnName:i,columnValue:r,columnMetaData:o,storeColumn:e,onColumnChange:t,metaData:d,formMode:p})=>(b.debug(i,r,o,e,t,d),s.jsxs(j,{children:[s.jsx("div",{}),s.jsx(f,{control:s.jsx(h,{id:i,checked:r===1||r==="1"||r===!0||r==="on",disabled:p===x.VIEW||p===x.UPDATE&&d.primary_key.includes(i),onChange:(k,a)=>{t(i,a)},className:e.classNames}),label:o.formLabel}),s.jsx(m,{children:F(e,"")})]}));export{H as default};