import React from 'react';
import { createRoot } from 'react-dom/client'
import { useInView } from 'react-intersection-observer';

const AccessNot = () => {
  const [ref, inView] = useInView({
    threshold: 0,
    triggerOnce: true,
  });
  const animationUp = inView ? 'animate-fade-up animate-once animate-duration-[1500ms] animate-delay-500 animate-ease-linear animate-alternate animate-fill-backwards opacity-100' : 'opacity-0';
  const flip = inView ? 'animate-flip-up animate-once animate-delay-[1ms] animate-ease-out animate-normal animate-fill-backwards opacity-100' : 'opacity-0';
  return (
    <div ref={ref} className='back-gradien xs:pt-16 lg:pt-16 text-center pb-12 min-h-screen	flex flex-col items-center justify-center'>
      <h1 className={`${animationUp} xs:text-4xl md:text-6xl 2xl:text-9xl text-white font-bold font-time`}>Acceso Denegado</h1>
      <h2 className={`text-white ${animationUp} md:text-6xl xs:text-xl`}>Lo sentimos</h2>
      <h3 className={`${animationUp} text-white xl:text-2xl xs:text-xl`}>No tiene permiso para acceder a esta plataforma. Por favor, contacte al administrador para más información.</h3>
      {/* <div className={`${animationUp} flex justify-center items-center xs:flex-col sm:flex-row lg:mt-20 xs:mt-8`}>
        <a className='text-white inline-block bs-5-white md:text-2xl lg:text-2xl xs:text-base font-bold rounded-full md:px-8 lg:px-12 xs:px-2 lg:py-2 xs:py-2 hover:scale-105 ease-out duration-100 mx-12 xs:mb-4 md:mb-0' href="/">Volver a Inicio</a>
      </div> */}
    </div>
  );
};

if(document.getElementById('accessnot')){
    createRoot(document.getElementById('accessnot')).render(<AccessNot/>)
}
