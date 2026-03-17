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
    ],
  },
};

export default nextConfig;
