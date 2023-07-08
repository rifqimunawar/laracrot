var _a;
import * as jsxRuntime from "react/jsx-runtime";
import axios from "axios";
import { createRoot } from "react-dom/client";
import { createInertiaApp } from "@inertiajs/react";
const Fragment = jsxRuntime.Fragment;
const jsx = jsxRuntime.jsx;
const jsxs = jsxRuntime.jsxs;
window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
const app = "";
async function resolvePageComponent(path, pages) {
  const page = pages[path];
  if (typeof page === "undefined") {
    throw new Error(`Page not found: ${path}`);
  }
  return typeof page === "function" ? page() : page;
}
const appName = ((_a = window.document.getElementsByTagName("title")[0]) == null ? void 0 : _a.innerText) || "Laravel";
createInertiaApp({
  title: (title) => `${title} - ${appName}`,
  resolve: (name) => resolvePageComponent(`./Pages/${name}.tsx`, /* @__PURE__ */ Object.assign({ "./Pages/Auth/ConfirmPassword.tsx": () => import("./assets/ConfirmPassword-146dd0b2.js"), "./Pages/Auth/ForgotPassword.tsx": () => import("./assets/ForgotPassword-e1fa0967.js"), "./Pages/Auth/Login.tsx": () => import("./assets/Login-83c5a426.js"), "./Pages/Auth/Register.tsx": () => import("./assets/Register-ad5c50a4.js"), "./Pages/Auth/ResetPassword.tsx": () => import("./assets/ResetPassword-245ee307.js"), "./Pages/Auth/VerifyEmail.tsx": () => import("./assets/VerifyEmail-3b889e76.js"), "./Pages/Dashboard.tsx": () => import("./assets/Dashboard-aa58e9c9.js"), "./Pages/Profile/Edit.tsx": () => import("./assets/Edit-0924e819.js"), "./Pages/Profile/Partials/DeleteUserForm.tsx": () => import("./assets/DeleteUserForm-ee528572.js"), "./Pages/Profile/Partials/UpdatePasswordForm.tsx": () => import("./assets/UpdatePasswordForm-2669824a.js"), "./Pages/Profile/Partials/UpdateProfileInformationForm.tsx": () => import("./assets/UpdateProfileInformationForm-177d67ad.js"), "./Pages/Welcome.tsx": () => import("./assets/Welcome-013c3b9b.js") })),
  setup({ el, App, props }) {
    const root = createRoot(el);
    root.render(/* @__PURE__ */ jsx(App, { ...props }));
  },
  progress: {
    color: "#4B5563"
  }
});
export {
  Fragment as F,
  jsx as a,
  jsxs as j
};
