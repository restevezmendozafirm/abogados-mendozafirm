import React, { useState, useEffect } from 'react';
import { createRoot } from 'react-dom/client'
import { useInView } from 'react-intersection-observer';

const VideoPrincipal = () => {
    const idvideo = JSON.parse(document.getElementById('video-id').dataset.video);
    const [videoPrincipal, setVideoPrincipal] = useState([]);
    
    useEffect(() => {
        const fetchVideoPrincipal = async () => {
            try {
                const response = await axios.get(`/administrador/api/videoprincipal/${idvideo}`);
                setVideoPrincipal(<video controls className="h-full object-cover prueba" width="100%" height="auto" controlslist="nodownload" muted playsInline="true" loop poster="/images/img-training-capa.png">
                    <source src={`/images/${response.data}`} type="video/mp4" />
                    Your browser does not support the video tag.
                </video>);
                console.log(response.data);
            } catch (error) {
                console.error('Error al obtener los testimonios:', error);
            }
        };
        fetchVideoPrincipal();
    }, []);
    return (
        <>
            {videoPrincipal ? videoPrincipal : <p className='text-xl text-black font-bold'>Loading...</p>}

        </>
    );
}

if(document.getElementById('video-id')){
    createRoot(document.getElementById('video-id')).render(<VideoPrincipal/>)
}
