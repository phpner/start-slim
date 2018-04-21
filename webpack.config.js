const path = require('path');
const webpack = require('webpack');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const WebpackNotifierPlugin = require('webpack-notifier');

module.exports = {
    entry: [
        './src/front.js'
        ],
    output: {
        filename: 'js/[name].js',
        path: path.resolve(__dirname, 'public/assets')
    },
    resolve: {
        extensions: ['.js', '.vue', '.json','.scss'],
        modules: ['node_modules'],
    },
    externals: {
        /*jquery: 'jQuery'*/
    },
    module: {
        rules: [
            { test: /\.js$/, exclude: /node_modules/, loader: "babel-loader" },
            {
                test: /\.css|\.scss$/,
                use: ExtractTextPlugin.extract({
                    fallback: "style-loader",
                    use: [
                          'css-loader',
                          'scss-loader',
                        {
                            loader: 'postcss-loader',
                            options: { plugins: function () {return [ require('autoprefixer')({browsers: ['>1%','last 100 versions','Firefox ESR']}) ]; }  }
                        }
                        ]
                })
            },
            {
                test: /\.(png|jpg|gif|svg|ttf|woff2|woff|eot)$/,
                use: [
                    {
                        loader: 'file-loader',
                        options: {
                            name: '[name].[ext]',
                            publicPath: '../img/',
                            outputPath: 'img/'
                        }
                    }
                ]
            }
        ],
    },
    resolveLoader: {
        alias: {
            'scss-loader': 'sass-loader',
        },
    },
    plugins: [
        new WebpackNotifierPlugin(),
        new ExtractTextPlugin("css/[name].css"),
        new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery',
            'window.jQuery': 'jquery',
            _:"underscore",
            Backbone: 'backbone'
        }),
        new BrowserSyncPlugin({
            host: 'test.ru',
            port: 3000,
            proxy: 'test.ru',
            files: ["public/assets/**/*.css","public/assets/js/*.js","App/View/**.php"]
        })
    ]
};
