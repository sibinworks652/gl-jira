const fs = require('fs'); 
const dq = String.fromCharCode(34); 
const bs = String.fromCharCode(92); 
const gt = String.fromCharCode(62); 
let s = fs.readFileSync(process.argv[2], 'utf8'); 
s = s.split(bs + dq).join(dq).split('-' + gt).join('-' + gt).split('?-' + gt).join('?-' + gt); 
fs.writeFileSync(process.argv[2], s); 
