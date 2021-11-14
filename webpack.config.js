const path = require("path");
const webpack = require("webpack");
const CopyPlugin = require("copy-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
// const ImageminPlugin = require('imagemin-webpack-plugin').default


// ------------------------------------
// Script Entry
// ------------------------------------

const entries = {
    vendor:     "./src/assets/scripts/app/vendor.js",
    main:       "./src/assets/scripts/app/main.js",
};


// ------------------------------------
// Output
// ------------------------------------

const output = {
    filename: 'scripts/[name].js',
    path: path.resolve(__dirname, "./dist/"),
    publicPath: "/dist/",
};


// ------------------------------------
// Rules
// ------------------------------------

const stylesheets = {
    test: /\.(sa|sc|c)ss$/i,
    use: [
        { 
            loader: MiniCssExtractPlugin.loader 
        },
        
        { 
            loader: "css-loader",
            options: { 
                sourceMap: true,
                importLoaders: 1,
                url: false,
            }
        }, 
    
        {
            loader: 'postcss-loader',
            options: { 
                sourceMap: true 
            }
        },
  
        { 
            loader: "sass-loader",
            options: { 
                sourceMap: true,
            }
        },
]};
  
const fonts = {
    test: /\.(eot|ttf|woff|woff2)$/i,
    loader: 'file-loader',
    options: { name: 'fonts/[name].[hash].[ext]' }
};
  
const images = {
    test: /\.(gif|png|jpe?g|svg)$/i,

    use: [{
        // loader: 'url-loader',
        loader: 'file-loader',

        options: { 
            limit: 8000, // Convert images < 8kb to base64 strings
            name: 'images/[hash]-[name].[ext]'
        } 
    }]

    // use: ['base64-inline-loader'],

    // loaders: [
    //     'file?hash=sha512&digest=hex&name=images/[name].[ext]',
    //     'image-webpack?bypassOnDebug&optimizationLevel=7&interlaced=false'
    // ]

    // loader: 'file-loader',
    // options: { 
    //     // outputPath: './images',
    //     // name: 'images/[name]-[hash].[ext]' 
    //     name: 'images/[hash].[ext]' 
    // },

    // use: [
    //     'file-loader',
    //     'image-webpack-loader',
    // ]
};


// ------------------------------------
// Plugins
// ------------------------------------

const plugins = [

    new CleanWebpackPlugin(),

    new MiniCssExtractPlugin({
        filename: "./styles/[name].css"
    }),

    new CopyPlugin({
        patterns: [
            { from: "./src/assets/favicon", to: "favicon" },
            { from: "./src/assets/fonts", to: "fonts" },
            { from: "./src/assets/images", to: "images" },
        ],
    }),

    // new ImageminPlugin({
    //     test: /\.(jpe?g|png|gif)$/i,
    //     cacheFolder: './imgcache',
    // }),
];


// ------------------------------------
// Export
// ------------------------------------

module.exports = {
    mode: "production",
    entry: entries,
    output: output,
    plugins: plugins,
    
    module: {
        rules: [
            stylesheets,
            fonts,
            images,
        ],
    }
};