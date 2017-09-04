const webpack = require('webpack');

module.exports = {
	entry: './app/assets/temp/scripts/script.js',
	output: {
		path: './app/assets/temp/scripts/bundle',
		filename: 'Bundled.js'
	},
	resolve: {
		alias: {
			jquery: 'jquery/src/jquery'
		}
	},
	plugins: [
		new webpack.ProvidePlugin({
			$: 'jquery',
			jQuery: 'jquery',
			"window.jQuery": 'jquery',
			Popper: ['popper.js', 'default'],
			Tether: 'tether',
			'window.tether': 'tether'
		})
	]
}