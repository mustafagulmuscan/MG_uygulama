const WebSocket = require('ws');
const wss = new WebSocket.Server({ port: 8080 });

wss.on('connection', (ws) => {
    console.log('Yeni bağlantı!');

    ws.on('message', (message) => {
        console.log(`Alınan mesaj: ${message}`);
        // Tüm bağlı istemcilere mesajı gönder
        wss.clients.forEach((client) => {
            if (client.readyState === WebSocket.OPEN) {
                client.send(message.toString());
            }
        });
    });
});

console.log('WebSocket sunucusu 8080 portunda çalışıyor...');