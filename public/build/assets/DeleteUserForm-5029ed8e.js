import{r as c,W as x,j as s,a as e}from"./app-75fda444.js";import{D as d,M as N,S as D}from"./SecondaryButton-3591caa3.js";import{T as v,I as b}from"./TextInput-3b2bb54d.js";import{I as C}from"./InputLabel-fa5dc3b5.js";import"./transition-ffd1f170.js";function A({className:i=""}){const[u,o]=c.useState(!1),a=c.useRef(),{data:m,setData:p,delete:f,processing:y,reset:l,errors:h}=x({password:""}),w=()=>{o(!0)},g=r=>{r.preventDefault(),f(route("profile.destroy"),{preserveScroll:!0,onSuccess:()=>t(),onError:()=>{var n;return(n=a.current)==null?void 0:n.focus()},onFinish:()=>l()})},t=()=>{o(!1),l()};return s("section",{className:`space-y-6 ${i}`,children:[s("header",{children:[e("h2",{className:"text-lg font-medium text-gray-900",children:"Delete Account"}),e("p",{className:"mt-1 text-sm text-gray-600",children:"Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain."})]}),e(d,{onClick:w,children:"Delete Account"}),e(N,{show:u,onClose:t,children:s("form",{onSubmit:g,className:"p-6",children:[e("h2",{className:"text-lg font-medium text-gray-900",children:"Are you sure you want to delete your account?"}),e("p",{className:"mt-1 text-sm text-gray-600",children:"Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account."}),s("div",{className:"mt-6",children:[e(C,{htmlFor:"password",value:"Password",className:"sr-only"}),e(v,{id:"password",type:"password",name:"password",ref:a,value:m.password,onChange:r=>p("password",r.target.value),className:"mt-1 block w-3/4",isFocused:!0,placeholder:"Password"}),e(b,{message:h.password,className:"mt-2"})]}),s("div",{className:"mt-6 flex justify-end",children:[e(D,{onClick:t,children:"Cancel"}),e(d,{className:"ml-3",disabled:y,children:"Delete Account"})]})]})})]})}export{A as default};