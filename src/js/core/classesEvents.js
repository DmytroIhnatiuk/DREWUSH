function removeActive(arr, clazz = 'active') {
    arr.forEach((item) => {
        item.classList.remove(clazz);
    });
}
export {removeActive}