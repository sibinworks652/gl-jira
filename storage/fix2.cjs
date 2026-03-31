const fs = require('fs'); 
const gt = String.fromCharCode(62); 
const hat = ''; 
let s = fs.readFileSync(process.argv[2], 'utf8'); 
s = s.split('-' + hat + gt).join('-' + gt).split('?-' + hat + gt).join('?-' + gt); 
fs.writeFileSync(process.argv[2], s); 
