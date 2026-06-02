const fs = require('fs');
const path = require('path');

const bootstrapDist = path.join(__dirname, '../node_modules/bootstrap/dist');
const targetDir = path.join(__dirname, '../assets/vendor/bootstrap');

const files = [
  'css/bootstrap.min.css',
  'css/bootstrap.min.css.map',
  'js/bootstrap.bundle.min.js',
  'js/bootstrap.bundle.min.js.map',
];

if (!fs.existsSync(bootstrapDist)) {
  console.error('Bootstrap dist folder not found. Run npm install first.');
  process.exit(1);
}

fs.mkdirSync(path.join(targetDir, 'css'), { recursive: true });
fs.mkdirSync(path.join(targetDir, 'js'), { recursive: true });

files.forEach((file) => {
  const source = path.join(bootstrapDist, file);
  const destination = path.join(targetDir, file);

  if (fs.existsSync(source)) {
    fs.copyFileSync(source, destination);
    console.log(`Copied ${file}`);
  }
});
