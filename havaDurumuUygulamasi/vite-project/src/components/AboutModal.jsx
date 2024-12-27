import React, { useState } from "react";

function AboutModal() {
    const [isOpen, setIsOpen] = useState(false);

    return (
        <>
            <button onClick={() => setIsOpen(true)}>Hakkında</button>
            {isOpen && (
                <div className="modal">
                    <div className="modal-content">
                        <h2>Hakkında</h2>
                        <p>Bu uygulama,Mustafa Gülmüşcan tarafından geliştirilmiştir.</p>
                        <button onClick={() => setIsOpen(false)}>Kapat</button>
                    </div>
                </div>
            )}
        </>
    );
}

export default AboutModal;
