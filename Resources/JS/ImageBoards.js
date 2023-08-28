function copyImageToClipboard(imageUrl) {
    fetch(imageUrl)
        .then(response => response.blob())
        .then(blob => {
            const img = new Image();
            img.src = URL.createObjectURL(blob);
            img.onload = () => {
                const canvas = document.createElement('canvas');
                canvas.width = img.width;
                canvas.height = img.height;
                canvas.getContext('2d').drawImage(img, 0, 0);
                canvas.toBlob(newBlob => navigator.clipboard.write([new ClipboardItem({ 'image/png': newBlob })]));
            };
        })
        .catch(error => console.error('Error:', error));
}

function downloadImage(url) {
    fetch(url)
        .then(response => response.blob())
        .then(blob => {
            const objectURL = URL.createObjectURL(blob);
            const link = document.createElement('a');
            link.href = objectURL;
            link.download = 'Fanart';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        })
        .catch(error => console.error('Error:', error));
}