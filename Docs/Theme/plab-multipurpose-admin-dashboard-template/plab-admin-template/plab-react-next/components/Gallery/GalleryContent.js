import React, { Component } from 'react';
import Link from 'next/link';
import Lightbox from 'react-image-lightbox';
import 'react-image-lightbox/style.css';

const images = [
    require('../../images/gallery/1.jpg'),
    require('../../images/gallery/2.jpg'),
    require('../../images/gallery/3.jpg'),
    require('../../images/gallery/4.jpg'),
    require('../../images/gallery/5.jpg'),
    require('../../images/gallery/6.jpg'),
    require('../../images/gallery/7.jpg'),
    require('../../images/gallery/8.jpg'),
    require('../../images/gallery/9.jpg'),
    require('../../images/gallery/10.jpg'),
    require('../../images/gallery/11.jpg'),
    require('../../images/gallery/12.jpg'),
]
 
class GalleryContent extends Component {

    state = {
        photoIndex: 0,
        isOpenImage: false
    }

    render() {

        const { photoIndex, isOpenImage } = this.state;

        return (
            <div>
                <div className="gallery-content">
                    
                    {isOpenImage && (
                        <Lightbox
                            mainSrc={images[photoIndex]}
                            nextSrc={images[(photoIndex + 1) % images.length]}
                            prevSrc={images[(photoIndex + images.length - 1) % images.length]}
                            onCloseRequest={() => this.setState({ isOpenImage: false })}
                            onMovePrevRequest={() =>
                                this.setState({
                                    photoIndex: (photoIndex + images.length - 1) % images.length,
                                })
                            }
                            onMoveNextRequest={() =>
                                this.setState({
                                    photoIndex: (photoIndex + 1) % images.length,
                                })
                            }
                        />
                    )}

                    <div className="row"> 
                        <div className="col-lg-3 col-sm-4">
                            <div className="single-image"> 
                                <Link href="#">
                                    <a 
                                        className="popup-btn"
                                        onClick={e => {e.preventDefault(); this.setState({ isOpenImage: true, photoIndex: 0 })}}
                                    >
                                        <img src={require("../../images/gallery/1.jpg")} alt="Gallery Image" />
                                    </a>
                                </Link>
                            </div>
                        </div>

                        <div className="col-lg-3 col-sm-4">
                            <div className="single-image"> 
                                <Link href="#">
                                    <a 
                                        className="popup-btn"
                                        onClick={e => {e.preventDefault(); this.setState({ isOpenImage: true, photoIndex: 1 })}}
                                    >
                                        <img src={require("../../images/gallery/2.jpg")} alt="Gallery Image" />
                                    </a>
                                </Link>
                            </div>
                        </div>

                        <div className="col-lg-3 col-sm-4">
                            <div className="single-image"> 
                                <Link href="#">
                                    <a 
                                        className="popup-btn"
                                        onClick={e => {e.preventDefault(); this.setState({ isOpenImage: true, photoIndex: 2 })}}
                                    >
                                        <img src={require("../../images/gallery/3.jpg")} alt="Gallery Image" />
                                    </a>
                                </Link>
                            </div>
                        </div>

                        <div className="col-lg-3 col-sm-4">
                            <div className="single-image"> 
                                    <Link href="#">
                                        <a 
                                            className="popup-btn"
                                            onClick={e => {e.preventDefault(); this.setState({ isOpenImage: true, photoIndex: 3 })}}
                                        >
                                            <img src={require("../../images/gallery/4.jpg")} alt="Gallery Image" />
                                        </a>
                                </Link>
                            </div>
                        </div>

                        <div className="col-lg-3 col-sm-4">
                            <div className="single-image"> 
                                <Link href="#">
                                    <a 
                                        className="popup-btn"
                                        onClick={e => {e.preventDefault(); this.setState({ isOpenImage: true, photoIndex: 4 })}}
                                    >
                                        <img src={require("../../images/gallery/5.jpg")} alt="Gallery Image" />
                                    </a>
                                </Link>
                            </div>
                        </div>

                        <div className="col-lg-3 col-sm-4">
                            <div className="single-image"> 
                                <Link href="#">
                                    <a 
                                        className="popup-btn"
                                        onClick={e => {e.preventDefault(); this.setState({ isOpenImage: true, photoIndex: 5 })}}
                                    >
                                        <img src={require("../../images/gallery/6.jpg")} alt="Gallery Image" />
                                    </a>
                                </Link>
                            </div>
                        </div>

                        <div className="col-lg-3 col-sm-4">
                            <div className="single-image"> 
                                <Link href="#">
                                    <a 
                                        className="popup-btn"
                                        onClick={e => {e.preventDefault(); this.setState({ isOpenImage: true, photoIndex: 6 })}}
                                    >
                                        <img src={require("../../images/gallery/7.jpg")} alt="Gallery Image" />
                                    </a>
                                </Link>
                            </div>
                        </div>

                        <div className="col-lg-3 col-sm-4">
                            <div className="single-image"> 
                                <Link href="#">
                                    <a 
                                        className="popup-btn"
                                        onClick={e => {e.preventDefault(); this.setState({ isOpenImage: true, photoIndex: 7 })}}
                                    >
                                        <img src={require("../../images/gallery/8.jpg")} alt="Gallery Image" />
                                    </a>
                                </Link>
                            </div>
                        </div>

                        <div className="col-lg-3 col-sm-4">
                            <div className="single-image"> 
                                <Link href="#">
                                    <a 
                                        className="popup-btn"
                                        onClick={e => {e.preventDefault(); this.setState({ isOpenImage: true, photoIndex: 8 })}}
                                    >
                                        <img src={require("../../images/gallery/9.jpg")} alt="Gallery Image" />
                                    </a>
                                </Link>
                            </div>
                        </div>

                        <div className="col-lg-3 col-sm-4">
                            <div className="single-image"> 
                                <Link href="#">
                                    <a 
                                        className="popup-btn"
                                        onClick={e => {e.preventDefault(); this.setState({ isOpenImage: true, photoIndex: 9 })}}
                                    >
                                        <img src={require("../../images/gallery/10.jpg")} alt="Gallery Image" />
                                    </a>
                                </Link>
                            </div>
                        </div>

                        <div className="col-lg-3 col-sm-4">
                            <div className="single-image"> 
                                <Link href="#">
                                    <a 
                                        className="popup-btn"
                                        onClick={e => {e.preventDefault(); this.setState({ isOpenImage: true, photoIndex: 10 })}}
                                    >
                                        <img src={require("../../images/gallery/11.jpg")} alt="Gallery Image" />
                                    </a>
                                </Link>
                            </div>
                        </div>

                        <div className="col-lg-3 col-sm-4">
                            <div className="single-image"> 
                                <Link href="#">
                                    <a 
                                        className="popup-btn"
                                        onClick={e => {e.preventDefault(); this.setState({ isOpenImage: true, photoIndex: 11 })}}
                                    >
                                        <img src={require("../../images/gallery/12.jpg")} alt="Gallery Image" />
                                    </a>
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default GalleryContent;