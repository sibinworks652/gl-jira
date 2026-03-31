const fs = require('fs'); 
const gt = String.fromCharCode(62); 
const hat = ''; 
let s = fs.readFileSync(process.argv[2], 'utf8'); 
s = s.replaceAll('$project-' + hat + gt + 'id', '$project-' + gt + 'id').replaceAll('$module-' + hat + gt + 'id', '$module-' + gt + 'id').replaceAll('$status-' + hat + gt + 'color', '$status-' + gt + 'color').replaceAll('$moveStatus-' + hat + gt + 'id', '$moveStatus-' + gt + 'id'); 
fs.writeFileSync(process.argv[2], s); 
