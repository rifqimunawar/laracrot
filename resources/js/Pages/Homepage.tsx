import { Head } from "@inertiajs/react";

export default function Homepage(props) {
 console.log(props)
return (
  <div className="flex justify-center items-center h-screen bg-neutral-100">
   <Head title={props.title}/>
   <h1>{props.description}</h1>
  </div>
 );
}
