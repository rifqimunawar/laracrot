import { a as jsx } from "../app.js";
import { forwardRef, useRef, useEffect } from "react";
function InputError({ message, className = "", ...props }) {
  return message ? /* @__PURE__ */ jsx("p", { ...props, className: "text-sm text-red-600 " + className, children: message }) : null;
}
const TextInput = forwardRef(function TextInput2({ type = "text", className = "", isFocused = false, ...props }, ref) {
  const input = ref ? ref : useRef();
  useEffect(() => {
    if (isFocused) {
      input.current.focus();
    }
  }, []);
  return /* @__PURE__ */ jsx(
    "input",
    {
      ...props,
      type,
      className: "border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm " + className,
      ref: input
    }
  );
});
export {
  InputError as I,
  TextInput as T
};
