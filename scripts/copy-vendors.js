const fs = require('fs');
const path = require('path');

function copyFiles(sourceDir, targetDir, files) {
	if (!fs.existsSync(sourceDir)) {
		console.error(`Source not found: ${sourceDir}`);
		process.exit(1);
	}

	files.forEach((file) => {
		const source = path.join(sourceDir, file);
		const destination = path.join(targetDir, file);
		const destinationDir = path.dirname(destination);

		fs.mkdirSync(destinationDir, { recursive: true });

		if (fs.existsSync(source)) {
			fs.copyFileSync(source, destination);
			console.log(`Copied ${file}`);
		}
	});
}

const root = path.join(__dirname, '..');

copyFiles(path.join(root, 'node_modules/bootstrap/dist'), path.join(root, 'assets/vendor/bootstrap'), [
	'css/bootstrap.min.css',
	'css/bootstrap.min.css.map',
	'js/bootstrap.bundle.min.js',
	'js/bootstrap.bundle.min.js.map',
]);

copyFiles(path.join(root, 'node_modules/swiper'), path.join(root, 'assets/vendor/swiper'), [
	'swiper-bundle.min.css',
	'swiper-bundle.min.js',
	'swiper-bundle.min.js.map',
]);

copyFiles(path.join(root, 'node_modules/@fancyapps/ui/dist/fancybox'), path.join(root, 'assets/vendor/fancybox'), [
	'fancybox.css',
	'fancybox.umd.js',
]);
