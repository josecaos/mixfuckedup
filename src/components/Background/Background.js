
// @ts-ignore
const randomBackground = (images) => {

    let index;

    if (Array.isArray(images)) {
        index = Math.floor(Math.random() * images.length);
    } else {
        images = [images]
    }
    
    return index;
};

export default randomBackground; 