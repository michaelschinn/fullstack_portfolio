const markdownParser = (text) => {
    const toHtml = text
        .replace(/^### (.*$)/gim, '<h3>$1</h3>')
        .replace(/^## (.*$)/gim, '<h2>$1</h2>')
        .replace(/^# (.*$)/gim, '<h1>$1</h1>')
        .replace(/\*\*(.*)\*\*/gim, '<b>$1</b>')
        .replace(/\*(.*)\*/gim, '<i>$1</i>');

    return toHtml.trim();
}
const testText = `
    # This is a Heading 1
    ## This is a Heading 2
    ### This is a Heading 3
    **Bold Text**
    *Italic Text*
`;
console.log(markdownParser(testText));