const path = require("path");
const webpack = require("webpack");
const CopyPlugin = require("copy-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");


// ------------------------------------
// Script Entry
// ------------------------------------

const entries = {
    vendor:     "./src/assets/scripts/app/vendor.js",
    main:       "./src/assets/scripts/app/main.js",
    turbo:      "./src/assets/scripts/app/turbo.js",
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
            options: { importLoaders: 1 }
        }, 
    
        {
            loader: 'postcss-loader',
            options: { sourceMap: true }
        },
  
        { 
            loader: "sass-loader",
            options: { sourceMap: true }
        },
]};
  
const fonts = {
    test: /\.(eot|ttf|woff|woff2)$/i,
    loader: 'file-loader',
    options: { name: 'fonts/[name].[hash].[ext]' }
};
  
const images = {
    test: /\.(gif|png|jpe?g|svg)$/i,
    use: [
        'file-loader',
        'image-webpack-loader',
]};


// ------------------------------------
// Plugins
// ------------------------------------

const plugins = [
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
            // images,
        ],
    }
};