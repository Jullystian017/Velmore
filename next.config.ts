import type { NextConfig } from "next";

const nextConfig: NextConfig = {
  images: {
    remotePatterns: [
      {
        protocol: 'https',
        hostname: 'piimages.parfumo.de',
        pathname: '/**',
      },
      {
        protocol: 'https',
        hostname: 'cdn.notinoimg.com',
        pathname: '/**',
      },
      {
        protocol: 'https',
        hostname: 'www.fashionbeans.com',
        pathname: '/**',
      },
      {
        protocol: 'https',
        hostname: 'madeforhmns.com',
        pathname: '/**',
      },
      {
        protocol: 'https',
        hostname: 'cdn.shopify.com',
        pathname: '/**',
      },
      {
        protocol: 'http',
        hostname: 'cdn.shopify.com',
        pathname: '/**',
      },
      {
        protocol: 'https',
        hostname: 'essentia.com.do',
        pathname: '/**',
      },
      {
        protocol: 'https',
        hostname: 'down-id.img.susercontent.com',
        pathname: '/**',
      },
      {
        protocol: 'https',
        hostname: '*.susercontent.com',
        pathname: '/**',
      },
      {
        protocol: 'https',
        hostname: 'www.perfumenz.co.nz',
        pathname: '/**',
      },
      {
        protocol: 'https',
        hostname: '*.perfumenz.co.nz',
        pathname: '/**',
      },
    ],
  },
};

export default nextConfig;
