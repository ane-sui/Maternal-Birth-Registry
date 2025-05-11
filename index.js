const msg = document.querySelector('.msg');
const msgs = document.querySelector('.wait');

const ok = document.querySelector('.ok');

    // Remove error after 3 seconds
    setTimeout(() => msg.remove(), 2000);
    setTimeout(() => ok.remove(), 3000);
    setTimeout(() => msgs.remove(),3000);

