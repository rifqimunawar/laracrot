import{m as d,r as u,c as et,e as re,a as D,j as tt}from"./app-75fda444.js";import{l as J,s as B,a as A,u as R,b as ce,D as y,X as $,o as h,t as de,y as S,p as nt,f as Te,T as rt,c as ot,S as Ee,C as lt,d as q,$ as ee}from"./transition-ffd1f170.js";var we;let O=(we=d.useId)!=null?we:function(){let e=J(),[t,n]=d.useState(e?()=>B.nextId():null);return A(()=>{t===null&&n(B.nextId())},[t]),t!=null?""+t:void 0};function xe(e){return B.isServer?null:e instanceof Node?e.ownerDocument:e!=null&&e.hasOwnProperty("current")&&e.current instanceof Node?e.current.ownerDocument:document}let oe=["[contentEditable=true]","[tabindex]","a[href]","area[href]","button:not([disabled])","iframe","input:not([disabled])","select:not([disabled])","textarea:not([disabled])"].map(e=>`${e}:not([tabindex='-1'])`).join(",");var F=(e=>(e[e.First=1]="First",e[e.Previous=2]="Previous",e[e.Next=4]="Next",e[e.Last=8]="Last",e[e.WrapAround=16]="WrapAround",e[e.NoScroll=32]="NoScroll",e))(F||{}),Se=(e=>(e[e.Error=0]="Error",e[e.Overflow=1]="Overflow",e[e.Success=2]="Success",e[e.Underflow=3]="Underflow",e))(Se||{}),at=(e=>(e[e.Previous=-1]="Previous",e[e.Next=1]="Next",e))(at||{});function it(e=document.body){return e==null?[]:Array.from(e.querySelectorAll(oe)).sort((t,n)=>Math.sign((t.tabIndex||Number.MAX_SAFE_INTEGER)-(n.tabIndex||Number.MAX_SAFE_INTEGER)))}var Le=(e=>(e[e.Strict=0]="Strict",e[e.Loose=1]="Loose",e))(Le||{});function ut(e,t=0){var n;return e===((n=xe(e))==null?void 0:n.body)?!1:R(t,{[0](){return e.matches(oe)},[1](){let r=e;for(;r!==null;){if(r.matches(oe))return!0;r=r.parentElement}return!1}})}var st=(e=>(e[e.Keyboard=0]="Keyboard",e[e.Mouse=1]="Mouse",e))(st||{});typeof window<"u"&&typeof document<"u"&&(document.addEventListener("keydown",e=>{e.metaKey||e.altKey||e.ctrlKey||(document.documentElement.dataset.headlessuiFocusVisible="")},!0),document.addEventListener("click",e=>{e.detail===1?delete document.documentElement.dataset.headlessuiFocusVisible:e.detail===0&&(document.documentElement.dataset.headlessuiFocusVisible="")},!0));function C(e){e==null||e.focus({preventScroll:!0})}let ct=["textarea","input"].join(",");function dt(e){var t,n;return(n=(t=e==null?void 0:e.matches)==null?void 0:t.call(e,ct))!=null?n:!1}function ft(e,t=n=>n){return e.slice().sort((n,r)=>{let a=t(n),l=t(r);if(a===null||l===null)return 0;let o=a.compareDocumentPosition(l);return o&Node.DOCUMENT_POSITION_FOLLOWING?-1:o&Node.DOCUMENT_POSITION_PRECEDING?1:0})}function K(e,t,{sorted:n=!0,relativeTo:r=null,skipElements:a=[]}={}){let l=Array.isArray(e)?e.length>0?e[0].ownerDocument:document:e.ownerDocument,o=Array.isArray(e)?n?ft(e):e:it(e);a.length>0&&o.length>1&&(o=o.filter(m=>!a.includes(m))),r=r??l.activeElement;let i=(()=>{if(t&5)return 1;if(t&10)return-1;throw new Error("Missing Focus.First, Focus.Previous, Focus.Next or Focus.Last")})(),s=(()=>{if(t&1)return 0;if(t&2)return Math.max(0,o.indexOf(r))-1;if(t&4)return Math.max(0,o.indexOf(r))+1;if(t&8)return o.length-1;throw new Error("Missing Focus.First, Focus.Previous, Focus.Next or Focus.Last")})(),f=t&32?{preventScroll:!0}:{},c=0,p=o.length,E;do{if(c>=p||c+p<=0)return 0;let m=s+c;if(t&16)m=(m+p)%p;else{if(m<0)return 3;if(m>=p)return 1}E=o[m],E==null||E.focus(f),c+=i}while(E!==l.activeElement);return t&6&&dt(E)&&E.select(),2}function be(e,t,n){let r=ce(t);u.useEffect(()=>{function a(l){r.current(l)}return document.addEventListener(e,a,n),()=>document.removeEventListener(e,a,n)},[e,n])}function Pe(e,t,n){let r=ce(t);u.useEffect(()=>{function a(l){r.current(l)}return window.addEventListener(e,a,n),()=>window.removeEventListener(e,a,n)},[e,n])}function pt(e,t,n=!0){let r=u.useRef(!1);u.useEffect(()=>{requestAnimationFrame(()=>{r.current=n})},[n]);function a(o,i){if(!r.current||o.defaultPrevented)return;let s=i(o);if(s===null||!s.getRootNode().contains(s))return;let f=function c(p){return typeof p=="function"?c(p()):Array.isArray(p)||p instanceof Set?p:[p]}(e);for(let c of f){if(c===null)continue;let p=c instanceof HTMLElement?c:c.current;if(p!=null&&p.contains(s)||o.composed&&o.composedPath().includes(p))return}return!ut(s,Le.Loose)&&s.tabIndex!==-1&&o.preventDefault(),t(o,s)}let l=u.useRef(null);be("mousedown",o=>{var i,s;r.current&&(l.current=((s=(i=o.composedPath)==null?void 0:i.call(o))==null?void 0:s[0])||o.target)},!0),be("click",o=>{l.current&&(a(o,()=>l.current),l.current=null)},!0),Pe("blur",o=>a(o,()=>window.document.activeElement instanceof HTMLIFrameElement?window.document.activeElement:null),!0)}function mt(e){let t=e.parentElement,n=null;for(;t&&!(t instanceof HTMLFieldSetElement);)t instanceof HTMLLegendElement&&(n=t),t=t.parentElement;let r=(t==null?void 0:t.getAttribute("disabled"))==="";return r&&vt(n)?!1:r}function vt(e){if(!e)return!1;let t=e.previousElementSibling;for(;t!==null;){if(t instanceof HTMLLegendElement)return!1;t=t.previousElementSibling}return!0}let gt="div";var X=(e=>(e[e.None=1]="None",e[e.Focusable=2]="Focusable",e[e.Hidden=4]="Hidden",e))(X||{});function ht(e,t){let{features:n=1,...r}=e,a={ref:t,"aria-hidden":(n&2)===2?!0:void 0,style:{position:"fixed",top:1,left:1,width:1,height:0,padding:0,margin:-1,overflow:"hidden",clip:"rect(0, 0, 0, 0)",whiteSpace:"nowrap",borderWidth:"0",...(n&4)===4&&(n&2)!==2&&{display:"none"}}};return $({ourProps:a,theirProps:r,slot:{},defaultTag:gt,name:"Hidden"})}let le=y(ht);var De=(e=>(e.Space=" ",e.Enter="Enter",e.Escape="Escape",e.Backspace="Backspace",e.Delete="Delete",e.ArrowLeft="ArrowLeft",e.ArrowUp="ArrowUp",e.ArrowRight="ArrowRight",e.ArrowDown="ArrowDown",e.Home="Home",e.End="End",e.PageUp="PageUp",e.PageDown="PageDown",e.Tab="Tab",e))(De||{});function fe(e,t){let n=u.useRef([]),r=h(e);u.useEffect(()=>{let a=[...n.current];for(let[l,o]of t.entries())if(n.current[l]!==o){let i=r(t,a);return n.current=t,i}},[r,...t])}function Et(){return/iPhone/gi.test(window.navigator.platform)||/Mac/gi.test(window.navigator.platform)&&window.navigator.maxTouchPoints>0}var H=(e=>(e[e.Forwards=0]="Forwards",e[e.Backwards=1]="Backwards",e))(H||{});function wt(){let e=u.useRef(0);return Pe("keydown",t=>{t.key==="Tab"&&(e.current=t.shiftKey?1:0)},!0),e}function _(...e){return u.useMemo(()=>xe(...e),[...e])}function Fe(e,t,n,r){let a=ce(n);u.useEffect(()=>{e=e??window;function l(o){a.current(o)}return e.addEventListener(t,l,r),()=>e.removeEventListener(t,l,r)},[e,t,r])}function bt(e){function t(){document.readyState!=="loading"&&(e(),document.removeEventListener("DOMContentLoaded",t))}typeof window<"u"&&typeof document<"u"&&(document.addEventListener("DOMContentLoaded",t),t())}function Me(e){let t=h(e),n=u.useRef(!1);u.useEffect(()=>(n.current=!1,()=>{n.current=!0,de(()=>{n.current&&t()})}),[t])}function Ce(e){if(!e)return new Set;if(typeof e=="function")return new Set(e());let t=new Set;for(let n of e.current)n.current instanceof HTMLElement&&t.add(n.current);return t}let yt="div";var Ae=(e=>(e[e.None=1]="None",e[e.InitialFocus=2]="InitialFocus",e[e.TabLock=4]="TabLock",e[e.FocusLock=8]="FocusLock",e[e.RestoreFocus=16]="RestoreFocus",e[e.All=30]="All",e))(Ae||{});function $t(e,t){let n=u.useRef(null),r=S(n,t),{initialFocus:a,containers:l,features:o=30,...i}=e;J()||(o=1);let s=_(n);St({ownerDocument:s},!!(o&16));let f=Lt({ownerDocument:s,container:n,initialFocus:a},!!(o&2));Pt({ownerDocument:s,container:n,containers:l,previousActiveElement:f},!!(o&8));let c=wt(),p=h(v=>{let T=n.current;T&&(L=>L())(()=>{R(c.current,{[H.Forwards]:()=>{K(T,F.First,{skipElements:[v.relatedTarget]})},[H.Backwards]:()=>{K(T,F.Last,{skipElements:[v.relatedTarget]})}})})}),E=nt(),m=u.useRef(!1),Q={ref:r,onKeyDown(v){v.key=="Tab"&&(m.current=!0,E.requestAnimationFrame(()=>{m.current=!1}))},onBlur(v){let T=Ce(l);n.current instanceof HTMLElement&&T.add(n.current);let L=v.relatedTarget;L instanceof HTMLElement&&L.dataset.headlessuiFocusGuard!=="true"&&(Ne(T,L)||(m.current?K(n.current,R(c.current,{[H.Forwards]:()=>F.Next,[H.Backwards]:()=>F.Previous})|F.WrapAround,{relativeTo:v.target}):v.target instanceof HTMLElement&&C(v.target)))}};return d.createElement(d.Fragment,null,!!(o&4)&&d.createElement(le,{as:"button",type:"button","data-headlessui-focus-guard":!0,onFocus:p,features:X.Focusable}),$({ourProps:Q,theirProps:i,defaultTag:yt,name:"FocusTrap"}),!!(o&4)&&d.createElement(le,{as:"button",type:"button","data-headlessui-focus-guard":!0,onFocus:p,features:X.Focusable}))}let Tt=y($t),k=Object.assign(Tt,{features:Ae}),P=[];bt(()=>{function e(t){t.target instanceof HTMLElement&&t.target!==document.body&&P[0]!==t.target&&(P.unshift(t.target),P=P.filter(n=>n!=null&&n.isConnected),P.splice(10))}window.addEventListener("click",e,{capture:!0}),window.addEventListener("mousedown",e,{capture:!0}),window.addEventListener("focus",e,{capture:!0}),document.body.addEventListener("click",e,{capture:!0}),document.body.addEventListener("mousedown",e,{capture:!0}),document.body.addEventListener("focus",e,{capture:!0})});function xt(e=!0){let t=u.useRef(P.slice());return fe(([n],[r])=>{r===!0&&n===!1&&de(()=>{t.current.splice(0)}),r===!1&&n===!0&&(t.current=P.slice())},[e,P,t]),h(()=>{var n;return(n=t.current.find(r=>r!=null&&r.isConnected))!=null?n:null})}function St({ownerDocument:e},t){let n=xt(t);fe(()=>{t||(e==null?void 0:e.activeElement)===(e==null?void 0:e.body)&&C(n())},[t]),Me(()=>{t&&C(n())})}function Lt({ownerDocument:e,container:t,initialFocus:n},r){let a=u.useRef(null),l=Te();return fe(()=>{if(!r)return;let o=t.current;o&&de(()=>{if(!l.current)return;let i=e==null?void 0:e.activeElement;if(n!=null&&n.current){if((n==null?void 0:n.current)===i){a.current=i;return}}else if(o.contains(i)){a.current=i;return}n!=null&&n.current?C(n.current):K(o,F.First)===Se.Error&&console.warn("There are no focusable elements inside the <FocusTrap />"),a.current=e==null?void 0:e.activeElement})},[r]),a}function Pt({ownerDocument:e,container:t,containers:n,previousActiveElement:r},a){let l=Te();Fe(e==null?void 0:e.defaultView,"focus",o=>{if(!a||!l.current)return;let i=Ce(n);t.current instanceof HTMLElement&&i.add(t.current);let s=r.current;if(!s)return;let f=o.target;f&&f instanceof HTMLElement?Ne(i,f)?(r.current=f,C(f)):(o.preventDefault(),o.stopPropagation(),C(s)):C(r.current)},!0)}function Ne(e,t){for(let n of e)if(n.contains(t))return!0;return!1}let Re=u.createContext(!1);function Dt(){return u.useContext(Re)}function ae(e){return d.createElement(Re.Provider,{value:e.force},e.children)}function Ft(e){let t=Dt(),n=u.useContext(Oe),r=_(e),[a,l]=u.useState(()=>{if(!t&&n!==null||B.isServer)return null;let o=r==null?void 0:r.getElementById("headlessui-portal-root");if(o)return o;if(r===null)return null;let i=r.createElement("div");return i.setAttribute("id","headlessui-portal-root"),r.body.appendChild(i)});return u.useEffect(()=>{a!==null&&(r!=null&&r.body.contains(a)||r==null||r.body.appendChild(a))},[a,r]),u.useEffect(()=>{t||n!==null&&l(n.current)},[n,l,t]),a}let Mt=u.Fragment;function Ct(e,t){let n=e,r=u.useRef(null),a=S(rt(c=>{r.current=c}),t),l=_(r),o=Ft(r),[i]=u.useState(()=>{var c;return B.isServer?null:(c=l==null?void 0:l.createElement("div"))!=null?c:null}),s=u.useContext(ie),f=J();return A(()=>{!o||!i||o.contains(i)||(i.setAttribute("data-headlessui-portal",""),o.appendChild(i))},[o,i]),A(()=>{if(i&&s)return s.register(i)},[s,i]),Me(()=>{var c;!o||!i||(i instanceof Node&&o.contains(i)&&o.removeChild(i),o.childNodes.length<=0&&((c=o.parentElement)==null||c.removeChild(o)))}),f?!o||!i?null:et.createPortal($({ourProps:{ref:a},theirProps:n,defaultTag:Mt,name:"Portal"}),i):null}let At=u.Fragment,Oe=u.createContext(null);function Nt(e,t){let{target:n,...r}=e,a={ref:S(t)};return d.createElement(Oe.Provider,{value:n},$({ourProps:a,theirProps:r,defaultTag:At,name:"Popover.Group"}))}let ie=u.createContext(null);function Rt(){let e=u.useContext(ie),t=u.useRef([]),n=h(l=>(t.current.push(l),e&&e.register(l),()=>r(l))),r=h(l=>{let o=t.current.indexOf(l);o!==-1&&t.current.splice(o,1),e&&e.unregister(l)}),a=u.useMemo(()=>({register:n,unregister:r,portals:t}),[n,r,t]);return[t,u.useMemo(()=>function({children:l}){return d.createElement(ie.Provider,{value:a},l)},[a])]}let Ot=y(Ct),kt=y(Nt),ue=Object.assign(Ot,{Group:kt}),ke=u.createContext(null);function Ie(){let e=u.useContext(ke);if(e===null){let t=new Error("You used a <Description /> component, but it is not inside a relevant parent.");throw Error.captureStackTrace&&Error.captureStackTrace(t,Ie),t}return e}function It(){let[e,t]=u.useState([]);return[e.length>0?e.join(" "):void 0,u.useMemo(()=>function(n){let r=h(l=>(t(o=>[...o,l]),()=>t(o=>{let i=o.slice(),s=i.indexOf(l);return s!==-1&&i.splice(s,1),i}))),a=u.useMemo(()=>({register:r,slot:n.slot,name:n.name,props:n.props}),[r,n.slot,n.name,n.props]);return d.createElement(ke.Provider,{value:a},n.children)},[t])]}let Ht="p";function Bt(e,t){let n=O(),{id:r=`headlessui-description-${n}`,...a}=e,l=Ie(),o=S(t);A(()=>l.register(r),[r,l.register]);let i={ref:o,...l.props,id:r};return $({ourProps:i,theirProps:a,slot:l.slot||{},defaultTag:Ht,name:l.name||"Description"})}let _t=y(Bt),jt=Object.assign(_t,{}),pe=u.createContext(()=>{});pe.displayName="StackContext";var se=(e=>(e[e.Add=0]="Add",e[e.Remove=1]="Remove",e))(se||{});function Ut(){return u.useContext(pe)}function Wt({children:e,onUpdate:t,type:n,element:r,enabled:a}){let l=Ut(),o=h((...i)=>{t==null||t(...i),l(...i)});return A(()=>{let i=a===void 0||a===!0;return i&&o(0,n,r),()=>{i&&o(1,n,r)}},[o,n,r,a]),d.createElement(pe.Provider,{value:o},e)}function Vt(e,t){return e===t&&(e!==0||1/e===1/t)||e!==e&&t!==t}const Yt=typeof Object.is=="function"?Object.is:Vt,{useState:Gt,useEffect:qt,useLayoutEffect:Kt,useDebugValue:Xt}=re;function zt(e,t,n){const r=t(),[{inst:a},l]=Gt({inst:{value:r,getSnapshot:t}});return Kt(()=>{a.value=r,a.getSnapshot=t,te(a)&&l({inst:a})},[e,r,t]),qt(()=>(te(a)&&l({inst:a}),e(()=>{te(a)&&l({inst:a})})),[e]),Xt(r),r}function te(e){const t=e.getSnapshot,n=e.value;try{const r=t();return!Yt(n,r)}catch{return!0}}function Jt(e,t,n){return t()}const Qt=typeof window<"u"&&typeof window.document<"u"&&typeof window.document.createElement<"u",Zt=!Qt,en=Zt?Jt:zt,tn="useSyncExternalStore"in re?(e=>e.useSyncExternalStore)(re):en;function nn(e){return tn(e.subscribe,e.getSnapshot,e.getSnapshot)}function rn(e,t){let n=e(),r=new Set;return{getSnapshot(){return n},subscribe(a){return r.add(a),()=>r.delete(a)},dispatch(a,...l){let o=t[a].call(n,...l);o&&(n=o,r.forEach(i=>i()))}}}function on(){let e;return{before({doc:t}){var n;let r=t.documentElement;e=((n=t.defaultView)!=null?n:window).innerWidth-r.clientWidth},after({doc:t,d:n}){let r=t.documentElement,a=r.clientWidth-r.offsetWidth,l=e-a;n.style(r,"paddingRight",`${l}px`)}}}function ln(){if(!Et())return{};let e;return{before(){e=window.pageYOffset},after({doc:t,d:n,meta:r}){function a(o){return r.containers.flatMap(i=>i()).some(i=>i.contains(o))}n.style(t.body,"marginTop",`-${e}px`),window.scrollTo(0,0);let l=null;n.addEventListener(t,"click",o=>{if(o.target instanceof HTMLElement)try{let i=o.target.closest("a");if(!i)return;let{hash:s}=new URL(i.href),f=t.querySelector(s);f&&!a(f)&&(l=f)}catch{}},!0),n.addEventListener(t,"touchmove",o=>{o.target instanceof HTMLElement&&!a(o.target)&&o.preventDefault()},{passive:!1}),n.add(()=>{window.scrollTo(0,window.pageYOffset+e),l&&l.isConnected&&(l.scrollIntoView({block:"nearest"}),l=null)})}}}function an(){return{before({doc:e,d:t}){t.style(e.documentElement,"overflow","hidden")}}}function un(e){let t={};for(let n of e)Object.assign(t,n(t));return t}let M=rn(()=>new Map,{PUSH(e,t){var n;let r=(n=this.get(e))!=null?n:{doc:e,count:0,d:ot(),meta:new Set};return r.count++,r.meta.add(t),this.set(e,r),this},POP(e,t){let n=this.get(e);return n&&(n.count--,n.meta.delete(t)),this},SCROLL_PREVENT({doc:e,d:t,meta:n}){let r={doc:e,d:t,meta:un(n)},a=[ln(),on(),an()];a.forEach(({before:l})=>l==null?void 0:l(r)),a.forEach(({after:l})=>l==null?void 0:l(r))},SCROLL_ALLOW({d:e}){e.dispose()},TEARDOWN({doc:e}){this.delete(e)}});M.subscribe(()=>{let e=M.getSnapshot(),t=new Map;for(let[n]of e)t.set(n,n.documentElement.style.overflow);for(let n of e.values()){let r=t.get(n.doc)==="hidden",a=n.count!==0;(a&&!r||!a&&r)&&M.dispatch(n.count>0?"SCROLL_PREVENT":"SCROLL_ALLOW",n),n.count===0&&M.dispatch("TEARDOWN",n)}});function sn(e,t,n){let r=nn(M),a=e?r.get(e):void 0,l=a?a.count>0:!1;return A(()=>{if(!(!e||!t))return M.dispatch("PUSH",e,n),()=>M.dispatch("POP",e,n)},[t,e]),l}let ne=new Map,I=new Map;function ye(e,t=!0){A(()=>{var n;if(!t)return;let r=typeof e=="function"?e():e.current;if(!r)return;function a(){var o;if(!r)return;let i=(o=I.get(r))!=null?o:1;if(i===1?I.delete(r):I.set(r,i-1),i!==1)return;let s=ne.get(r);s&&(s["aria-hidden"]===null?r.removeAttribute("aria-hidden"):r.setAttribute("aria-hidden",s["aria-hidden"]),r.inert=s.inert,ne.delete(r))}let l=(n=I.get(r))!=null?n:0;return I.set(r,l+1),l!==0||(ne.set(r,{"aria-hidden":r.getAttribute("aria-hidden"),inert:r.inert}),r.setAttribute("aria-hidden","true"),r.inert=!0),a},[e,t])}function cn({defaultContainers:e=[],portals:t}={}){let n=u.useRef(null),r=_(n),a=h(()=>{var l;let o=[];for(let i of e)i!==null&&(i instanceof HTMLElement?o.push(i):"current"in i&&i.current instanceof HTMLElement&&o.push(i.current));if(t!=null&&t.current)for(let i of t.current)o.push(i);for(let i of(l=r==null?void 0:r.querySelectorAll("html > *, body > *"))!=null?l:[])i!==document.body&&i!==document.head&&i instanceof HTMLElement&&i.id!=="headlessui-portal-root"&&(i.contains(n.current)||o.some(s=>i.contains(s))||o.push(i));return o});return{resolveContainers:a,contains:h(l=>a().some(o=>o.contains(l))),mainTreeNodeRef:n,MainTreeNode:u.useMemo(()=>function(){return d.createElement(le,{features:X.Hidden,ref:n})},[n])}}var dn=(e=>(e[e.Open=0]="Open",e[e.Closed=1]="Closed",e))(dn||{}),fn=(e=>(e[e.SetTitleId=0]="SetTitleId",e))(fn||{});let pn={[0](e,t){return e.titleId===t.id?e:{...e,titleId:t.id}}},z=u.createContext(null);z.displayName="DialogContext";function j(e){let t=u.useContext(z);if(t===null){let n=new Error(`<${e} /> is missing a parent <Dialog /> component.`);throw Error.captureStackTrace&&Error.captureStackTrace(n,j),n}return t}function mn(e,t,n=()=>[document.body]){sn(e,t,r=>{var a;return{containers:[...(a=r.containers)!=null?a:[],n]}})}function vn(e,t){return R(t.type,pn,e,t)}let gn="div",hn=Ee.RenderStrategy|Ee.Static;function En(e,t){var n;let r=O(),{id:a=`headlessui-dialog-${r}`,open:l,onClose:o,initialFocus:i,__demoMode:s=!1,...f}=e,[c,p]=u.useState(0),E=lt();l===void 0&&E!==null&&(l=(E&q.Open)===q.Open);let m=u.useRef(null),Q=S(m,t),v=_(m),T=e.hasOwnProperty("open")||E!==null,L=e.hasOwnProperty("onClose");if(!T&&!L)throw new Error("You have to provide an `open` and an `onClose` prop to the `Dialog` component.");if(!T)throw new Error("You provided an `onClose` prop to the `Dialog`, but forgot an `open` prop.");if(!L)throw new Error("You provided an `open` prop to the `Dialog`, but forgot an `onClose` prop.");if(typeof l!="boolean")throw new Error(`You provided an \`open\` prop to the \`Dialog\`, but the value is not a boolean. Received: ${l}`);if(typeof o!="function")throw new Error(`You provided an \`onClose\` prop to the \`Dialog\`, but the value is not a function. Received: ${o}`);let w=l?0:1,[U,He]=u.useReducer(vn,{titleId:null,descriptionId:null,panelRef:u.createRef()}),N=h(()=>o(!1)),me=h(g=>He({type:0,id:g})),W=J()?s?!1:w===0:!1,V=c>1,ve=u.useContext(z)!==null,[Be,_e]=Rt(),{resolveContainers:Z,mainTreeNodeRef:Y,MainTreeNode:je}=cn({portals:Be,defaultContainers:[(n=U.panelRef.current)!=null?n:m.current]}),Ue=V?"parent":"leaf",ge=E!==null?(E&q.Closing)===q.Closing:!1,We=(()=>ve||ge?!1:W)(),Ve=u.useCallback(()=>{var g,x;return(x=Array.from((g=v==null?void 0:v.querySelectorAll("body > *"))!=null?g:[]).find(b=>b.id==="headlessui-portal-root"?!1:b.contains(Y.current)&&b instanceof HTMLElement))!=null?x:null},[Y]);ye(Ve,We);let Ye=(()=>V?!0:W)(),Ge=u.useCallback(()=>{var g,x;return(x=Array.from((g=v==null?void 0:v.querySelectorAll("[data-headlessui-portal]"))!=null?g:[]).find(b=>b.contains(Y.current)&&b instanceof HTMLElement))!=null?x:null},[Y]);ye(Ge,Ye);let qe=(()=>!(!W||V))();pt(Z,N,qe);let Ke=(()=>!(V||w!==0))();Fe(v==null?void 0:v.defaultView,"keydown",g=>{Ke&&(g.defaultPrevented||g.key===De.Escape&&(g.preventDefault(),g.stopPropagation(),N()))});let Xe=(()=>!(ge||w!==0||ve))();mn(v,Xe,Z),u.useEffect(()=>{if(w!==0||!m.current)return;let g=new ResizeObserver(x=>{for(let b of x){let G=b.target.getBoundingClientRect();G.x===0&&G.y===0&&G.width===0&&G.height===0&&N()}});return g.observe(m.current),()=>g.disconnect()},[w,m,N]);let[ze,Je]=It(),Qe=u.useMemo(()=>[{dialogState:w,close:N,setTitleId:me},U],[w,U,N,me]),he=u.useMemo(()=>({open:w===0}),[w]),Ze={ref:Q,id:a,role:"dialog","aria-modal":w===0?!0:void 0,"aria-labelledby":U.titleId,"aria-describedby":ze};return d.createElement(Wt,{type:"Dialog",enabled:w===0,element:m,onUpdate:h((g,x)=>{x==="Dialog"&&R(g,{[se.Add]:()=>p(b=>b+1),[se.Remove]:()=>p(b=>b-1)})})},d.createElement(ae,{force:!0},d.createElement(ue,null,d.createElement(z.Provider,{value:Qe},d.createElement(ue.Group,{target:m},d.createElement(ae,{force:!1},d.createElement(Je,{slot:he,name:"Dialog.Description"},d.createElement(k,{initialFocus:i,containers:Z,features:W?R(Ue,{parent:k.features.RestoreFocus,leaf:k.features.All&~k.features.FocusLock}):k.features.None},d.createElement(_e,null,$({ourProps:Ze,theirProps:f,slot:he,defaultTag:gn,features:hn,visible:w===0,name:"Dialog"}))))))))),d.createElement(je,null))}let wn="div";function bn(e,t){let n=O(),{id:r=`headlessui-dialog-overlay-${n}`,...a}=e,[{dialogState:l,close:o}]=j("Dialog.Overlay"),i=S(t),s=h(c=>{if(c.target===c.currentTarget){if(mt(c.currentTarget))return c.preventDefault();c.preventDefault(),c.stopPropagation(),o()}}),f=u.useMemo(()=>({open:l===0}),[l]);return $({ourProps:{ref:i,id:r,"aria-hidden":!0,onClick:s},theirProps:a,slot:f,defaultTag:wn,name:"Dialog.Overlay"})}let yn="div";function $n(e,t){let n=O(),{id:r=`headlessui-dialog-backdrop-${n}`,...a}=e,[{dialogState:l},o]=j("Dialog.Backdrop"),i=S(t);u.useEffect(()=>{if(o.panelRef.current===null)throw new Error("A <Dialog.Backdrop /> component is being used, but a <Dialog.Panel /> component is missing.")},[o.panelRef]);let s=u.useMemo(()=>({open:l===0}),[l]);return d.createElement(ae,{force:!0},d.createElement(ue,null,$({ourProps:{ref:i,id:r,"aria-hidden":!0},theirProps:a,slot:s,defaultTag:yn,name:"Dialog.Backdrop"})))}let Tn="div";function xn(e,t){let n=O(),{id:r=`headlessui-dialog-panel-${n}`,...a}=e,[{dialogState:l},o]=j("Dialog.Panel"),i=S(t,o.panelRef),s=u.useMemo(()=>({open:l===0}),[l]),f=h(c=>{c.stopPropagation()});return $({ourProps:{ref:i,id:r,onClick:f},theirProps:a,slot:s,defaultTag:Tn,name:"Dialog.Panel"})}let Sn="h2";function Ln(e,t){let n=O(),{id:r=`headlessui-dialog-title-${n}`,...a}=e,[{dialogState:l,setTitleId:o}]=j("Dialog.Title"),i=S(t);u.useEffect(()=>(o(r),()=>o(null)),[r,o]);let s=u.useMemo(()=>({open:l===0}),[l]);return $({ourProps:{ref:i,id:r},theirProps:a,slot:s,defaultTag:Sn,name:"Dialog.Title"})}let Pn=y(En),Dn=y($n),Fn=y(xn),Mn=y(bn),Cn=y(Ln),$e=Object.assign(Pn,{Backdrop:Dn,Panel:Fn,Overlay:Mn,Title:Cn,Description:jt});function Rn({className:e="",disabled:t,children:n,...r}){return D("button",{...r,className:`inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150 ${t&&"opacity-25"} `+e,disabled:t,children:n})}function On({children:e,show:t=!1,maxWidth:n="2xl",closeable:r=!0,onClose:a=()=>{}}){const l=()=>{r&&a()},o={sm:"sm:max-w-sm",md:"sm:max-w-md",lg:"sm:max-w-lg",xl:"sm:max-w-xl","2xl":"sm:max-w-2xl"}[n];return D(ee,{show:t,as:u.Fragment,leave:"duration-200",children:tt($e,{as:"div",id:"modal",className:"fixed inset-0 flex overflow-y-auto px-4 py-6 sm:px-0 items-center z-50 transform transition-all",onClose:l,children:[D(ee.Child,{as:u.Fragment,enter:"ease-out duration-300",enterFrom:"opacity-0",enterTo:"opacity-100",leave:"ease-in duration-200",leaveFrom:"opacity-100",leaveTo:"opacity-0",children:D("div",{className:"absolute inset-0 bg-gray-500/75"})}),D(ee.Child,{as:u.Fragment,enter:"ease-out duration-300",enterFrom:"opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95",enterTo:"opacity-100 translate-y-0 sm:scale-100",leave:"ease-in duration-200",leaveFrom:"opacity-100 translate-y-0 sm:scale-100",leaveTo:"opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95",children:D($e.Panel,{className:`mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:mx-auto ${o}`,children:e})})]})})}function kn({type:e="button",className:t="",disabled:n,children:r,...a}){return D("button",{...a,type:e,className:`inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 ${n&&"opacity-25"} `+t,disabled:n,children:r})}export{Rn as D,On as M,kn as S};
